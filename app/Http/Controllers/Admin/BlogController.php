<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Item;
use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $all_blogs = Blog::orderBy('id','DESC');
            if($request->search_keyword){
                $all_blogs->where('blog_slug->ar','LIKE','%'.$request->search_keyword.'%');
            }
        $all_blogs =  $all_blogs->paginate(10);


        return view('backend.admin.blog.index',compact('all_blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'image1' => 'required'
        ]);
        $blog_image = empty($request->image1) ? null : $request->image1;

        $blog =Blog::create([
            'title' => $request->name,
            'content' => $request->content,
            'canonical' => $request->canonical,
            'blog_slug' => $request->slug,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword,
            'alt_image' => $request->alt_image,
        ]);

        $blog_image_file_name = null;
        if(!empty($blog_image))
        {
            $currentDate = Carbon::now()->toDateString();

            $blog_image_file_name = $blog->blog_slug.'_'.$currentDate.'_'.uniqid().'.jpg';

            // create category storage folder if not exist
            if(!Storage::disk('public')->exists('blog')){
                Storage::disk('public')->makeDirectory('blog');
            }

            $blog_image_obj = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '',$blog_image)))
                ->stream('jpg', 100);
            Storage::disk('public')->put('blog/'.$blog_image_file_name, $blog_image_obj);
        }

        $blog->update([
            'image' => $blog_image_file_name
        ]);

        return redirect()->route('admin.blogs.edit',$blog)
            ->with('success','Created Sucessfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
        return view('backend.admin.blog.edit',compact('blog'));
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
        //
        $blog_image = empty($request->image1) ? null : $request->image1;

        $blog->update([
            'title' => $request->name,
            'content' => $request->content,
            'canonical' => $request->canonical,
            'blog_slug' => $request->slug,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keyword' => $request->meta_keyword,
            'alt_image' => $request->alt_image,
        ]);
        $blog_image_file_name = null;
        if(!empty($blog_image))
        {
            $currentDate = Carbon::now()->toDateString();

            $blog_image_file_name = $blog->blog_slug.'_'.$currentDate.'_'.uniqid().'.jpg';

            // create category storage folder if not exist
            if(!Storage::disk('public')->exists('blog')){
                Storage::disk('public')->makeDirectory('blog');
            }

            $blog_image_obj = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '',$blog_image)))
                ->stream('jpg', 100);
            Storage::disk('public')->put('blog/'.$blog_image_file_name, $blog_image_obj);


            $blog->update([
                'image' => $blog_image_file_name
            ]);
        }


        return redirect()->route('admin.blogs.edit',$blog)
            ->with('success','Created Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
        $blog->delete();
        return redirect()->route('admin.blogs.index')
            ->with('success','Deleted Sucessfully');
    }


    public function blogReviewsIndex(Request $request)
    {
        $settings = app('site_global_settings');



        $reviews_type = $request->reviews_type;

        if(empty($reviews_type) || $reviews_type == 'all')
        {
            $reviews =  Review::where('reviewrateable_type','App\Models\Blog')
                ->orderBy('updated_at', 'desc')
                ->get();
        }
        else
        {
            if($reviews_type == 'pending')
            {
                $reviews = Review::where('reviewrateable_type','App\Models\Blog')
                    ->orderBy('updated_at', 'desc')
                    ->get();
            }

            if($reviews_type == 'approved')
            {
                $reviews =  Review::where('reviewrateable_type','App\Models\Blog')
                    ->orderBy('updated_at', 'desc')
                    ->get();
            }

            if($reviews_type == 'me')
            {
                $reviews =  Review::where('author_id', Auth::user()->id)
                    ->where('reviewrateable_type','App\Models\Blog')
                    ->orderBy('updated_at', 'desc')
                    ->get();
            }

        }

        return response()->view('backend.admin.blog.review.index',
            compact('reviews_type', 'reviews'));
    }
}
