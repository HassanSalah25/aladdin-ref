<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\media;
use App\Resources\BlogsCategoryCollection;
use App\Resources\BlogsCollection;
use Illuminate\Http\Request;


class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blogs = BlogCategory::query()->paginate(10);
        return response()->json([
            'blogs_category' => BlogsCategoryCollection::collection($blogs)
            ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.admin.blog-cats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $blog = BlogCategory::create([
            'title' => $request->name,
            'title_ar' => $request->name_ar,
            'content_en' => $request->content_en,
            'content_ar' => $request->content_ar,

        ]);

        return redirect()->route('admin.blog-category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $blog = BlogCategory::find($id);
        return response()->json([
            'blogs' => BlogsCollection::collection($blog->blogs)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $blog = BlogCategory::find($id);
        return view('backend.admin.blog-cats.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $blog = BlogCategory::find($id);
        $blog->update([
            'title' => $request->name,
            'title_ar' => $request->name_ar,
            'content_en' => $request->content_en,
            'content_ar' => $request->content_ar,
        ]);


        return redirect()->route('admin.blog-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        //
        $blog = BlogCategory::find($id);
        $blog->delete();

        return redirect()->route('admin.blog-category.index');
    }
}
