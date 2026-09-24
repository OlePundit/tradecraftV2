<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Portfolio;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Blog::all();
        $services = Service::all();
        $prints = Portfolio::where('category', 'print')->get();
        $photocopys = Portfolio::where('category', 'photocopy')->get();
        $bindings = Portfolio::where('category', 'binding')->get();
        return view('home', compact('services','categories','prints','photocopys','bindings'));
    }
    public function about()
    {
        $categories = Blog::all();
        $services = Service::all();
        return view('about', compact('services', 'categories'));
    }
    public function blog()
    {
        $categories = Blog::all();
        $services = Service::all();
        $posts = Post::published()->latest()->paginate(9);
        return view('blog', compact('services', 'categories', 'posts'));
    }
    public function blogShow($slug)
    {
        $categories = Blog::all();
        $services = Service::all();
        $post = Post::published()->where('slug', $slug)->firstOrFail();
        $relatedPosts = Post::published()
            ->where('id', '!=', $post->id)
            ->latest()
            ->take(3)
            ->get();

        // Prefer the SEO description set in Voyager, falling back to the excerpt, then the body.
        $metaDescription = Str::limit(
            trim(preg_replace('/\s+/', ' ', strip_tags($post->meta_description ?: $post->excerpt ?: $post->body))),
            160
        );

        $schema = [
            '@context' => 'http://schema.org',
            '@type' => 'BlogPosting',
            'headline' => $post->title,
            'description' => $metaDescription,
            'datePublished' => $post->created_at->toAtomString(),
            'dateModified' => $post->updated_at->toAtomString(),
            'url' => route('blog.show', $post->slug),
            'mainEntityOfPage' => route('blog.show', $post->slug),
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Tradecraft Printers',
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => 'https://tradecraft.co.ke/assets/img/logo.png',
                ],
            ],
        ];
        if ($post->image) {
            $schema['image'] = asset('storage/' . $post->image);
        }
        $postSchema = json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

        return view('blog-show', compact('services', 'categories', 'post', 'relatedPosts', 'postSchema', 'metaDescription'));
    }
    public function service(Service $slug)
    {
        $services = Service::all();
        $categories = Blog::all();
        $relatedServices = Service::where('id', '!=', $slug->id)
        ->inRandomOrder()
        ->take(3)
        ->get();
        return view('service', compact('slug','categories', 'services','relatedServices'));
    }
    public function category(Blog $slug)
    {
        $categories = Blog::all();
        $services = Service::all();
        $relatedServices = Blog::where('id', '!=', $slug->id)
        ->inRandomOrder()
        ->take(3)
        ->get();
        return view('category', compact('slug', 'categories','services','relatedServices'));
    }
}
