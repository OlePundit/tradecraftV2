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
        $blogs = Blog::all();
        $services = Service::all();
        return view('home', compact('services','blogs'));
    }
    public function service(Service $slug)
    {
        $services = Service::all();
        $blogs = Blog::all();

        return view('service', compact('slug','blogs', 'services'));
    }
    public function category(Blog $slug)
    {
        $blogs = Blog::all();
        $services = Service::all();

        return view('category', compact('slug', 'blogs','services'));
    }
}
