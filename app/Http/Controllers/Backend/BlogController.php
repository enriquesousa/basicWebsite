<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

// Image Intervention Package
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class BlogController extends Controller
{
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

    
}
