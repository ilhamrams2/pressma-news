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
        $posts = Post::with('category')->latest()->get();
        return view('pages.home', compact('posts'));
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
    public function store(Request $request)
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
