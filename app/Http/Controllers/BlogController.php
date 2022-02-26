<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::get();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get(['id', 'name']);
        return view('blogs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $image = time() . '.' . $request->image->extension();
        $request->image->move(public_path('store'), $image);

        $data = ['image' => $image, 'user_id' => auth()->id(), 'slug' => strtolower(Str::slug($request->title, '-'))];
        Blog::create($request->except('image') + $data);
        return response()->json(['success' => true, 'message' => 'Blog Created Successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories = Category::get(['id', 'name']);
        return view('blogs.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        if (isset($request->image)) {
            $image = time() . '.' . $request->image->extension();
            $request->image->move(public_path('store'), $image);
        }
        $data = ['image' => $image ?? $blog->image, 'user_id' => auth()->id(), 'slug' => strtolower(Str::slug($request->title, '-'))];
        $blog->update($request->except('image') + $data);
        return response()->json(['success' => true, 'message' => 'Blog Updated Successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return response()->json(['success' => true, 'message' => 'Blog Deleted Successfully.']);
    }

    public function adminIndex()
    {
        $blogs = Blog::with('creator', 'comments')->latest()->get();
        return view('blogs.admin_index', compact('blogs'));
    }

    public function adminShow(Blog $blog)
    {
        return view('blogs.admin_show', compact('blog'));
    }
}
