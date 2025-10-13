<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Http\Request;

// Image Intervention Package
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class BlogController extends Controller
{
    // *************** //
    // Blog Categories //
    // *************** //

    public function AllBlogCategories(){
        $category = BlogCategory::latest()->get();
        return view('admin.backend.blog_category.blog_category', compact('category'));
    }

    public function StoreBlogCategory(Request $request){

        BlogCategory::insert([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-',$request->category_name)),             
        ]);

        $notification = array(
            'message' => __('Blog Category Inserted Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function EditBlogCategory($id){
        $categories = BlogCategory::find($id);
        return response()->json($categories);
    }

    public function UpdateBlogCategory(Request $request){

        // dd($request->all());

        $cat_id = $request->cat_id;

        BlogCategory::find($cat_id )->update([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-',$request->category_name)),     
        ]);

        $notification = array(
            'message' => __('Blog Category Updated Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function DeleteBlogCategory($id){

        BlogCategory::find($id)->delete();

        $notification = array(
            'message' => __('Blog Category Deleted Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


    // ********** //
    // Blog Posts //
    // ********** //

    public function AllBlogPosts(){
        $blogPosts = BlogPost::latest()->get();
        return view('admin.backend.blog_post.all_blog_post', compact('blogPosts'));
    }


    
    
}
