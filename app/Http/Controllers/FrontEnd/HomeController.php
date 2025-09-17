<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $one_posts = Post::with('category')->inRandomOrder()->take(1)->get();
        $posts = Post::with('category')
            ->inRandomOrder()
            ->take(4)
            ->get();

        $fe1_posts = $posts->slice(0, 2); // ambil 2 pertama
        $fe2_posts = $posts->slice(2, 2); // ambil 2 berikutnya

        $pp_posts = Post::with('category', 'user')->where('category_id', 3)->latest()->take(5)->get();
        return view('pages.home', compact('posts', 'pp_posts', 'one_posts', 'fe1_posts', 'fe2_posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function single(string $slug)
    {
        $singgleposts = Post::with('category', 'user')
            ->where('slug', $slug)
            ->firstOrFail();

        $posts = Post::with('category', 'user')
            ->where('id', '!=', $singgleposts->id) // exclude post yg sama
            ->latest()
            ->get();

        return view('pages.single', compact('singgleposts', 'posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function category(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
