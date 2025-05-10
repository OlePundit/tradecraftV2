<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Blog;

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
        return view('home', compact('services','categories'));
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
