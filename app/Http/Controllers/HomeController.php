<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Portfolio;

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
