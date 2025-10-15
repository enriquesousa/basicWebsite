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

    public function AddBlogPost(){
        $blog_categories = BlogCategory::latest()->get();
        return view('admin.backend.blog_post.add_blog_post', compact('blog_categories'));
    }

    public function StoreBlogPost(Request $request){

        // dd($request->all());

        $validate = $request->validate([
            'blog_category_id' => 'required|exists:blog_categories,id',
            'post_title' => 'required|string|max:200',
            'long_description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,svg|max:3000',
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(746,500)->save(public_path('upload/post/'.$name_gen));
            $save_url = 'upload/post/'.$name_gen;
            
            BlogPost::create([
                'blog_category_id' => $request->blog_category_id,
                'post_title' => $request->post_title,
                'post_slug' => strtolower(str_replace(' ', '-',$request->post_title)),
                'long_description' => $request->long_description,
                'image' => $save_url,
            ]);
        }

        $notification = array(
            'message' => __('Blog Post Inserted Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog.posts')->with($notification); 
    }

    public function EditBlogPost($id){
        $blogPost = BlogPost::find($id);
        $blogCategories = BlogCategory::latest()->get();
        return view('admin.backend.blog_post.edit_blog_post',compact('blogPost','blogCategories'));
    }

    public function UpdateBlogPost(Request $request){

        // dd($request->all());
        // Si no le hacemos modificación a la imagen nos llega image=null

        $validate = $request->validate([
            'blog_category_id' => 'required|exists:blog_categories,id',
            'post_title' => 'required|string|max:200',
            'long_description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:3000',
        ]);

        $blog_id = $request->id;
        $blogPost = BlogPost::find($blog_id);

        if ($request->file('image')) {

            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(746,500)->save(public_path('upload/post/'.$name_gen));
            $save_url = 'upload/post/'.$name_gen;
            
            BlogPost::find($request->id)->update([
                'blog_category_id' => $request->blog_category_id,
                'post_title' => $request->post_title,
                'post_slug' => strtolower(str_replace(' ', '-',$request->post_title)),
                'long_description' => $request->long_description,
                'image' => $save_url,
            ]);

            if (file_exists(public_path($blogPost->image))) {
                @unlink(public_path($blogPost->image));
            }

            $notification = array(
                'message' => __('Blog Post With Image Inserted Successfully'),
                'alert-type' => 'success'
            );
        }else{

            BlogPost::find($request->id)->update([
                'blog_category_id' => $request->blog_category_id,
                'post_title' => $request->post_title,
                'post_slug' => strtolower(str_replace(' ', '-',$request->post_title)),
                'long_description' => $request->long_description,
            ]);

            $notification = array(
                'message' => __('Blog Post Without Image Inserted Successfully'),
                'alert-type' => 'success'
            );
        }

        return redirect()->route('all.blog.posts')->with($notification); 
    }

    
    
}
