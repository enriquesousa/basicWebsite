<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Centric;
use App\Models\Core;
use Illuminate\Http\Request;

// Image Intervention Package
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class AboutController extends Controller
{
    // ****************************************************************** //
    // *** About Page Sección Principal. Title, Description and Image *** //
    // ****************************************************************** //
    public function GetAbout(){
        $about = About::find(1);
        return view('admin.backend.about.get_about', compact('about'));
    }

    public function UpdateAbout(Request $request){

        // dd($request->all());

        $about_id = $request->id;
        $about = About::find($about_id);

        if ($request->file('image')) {

            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(526,550)->save(public_path('upload/about/'.$name_gen));
            $save_url = 'upload/about/'.$name_gen;

            if (file_exists(public_path($about->image ))) {
                @unlink(public_path($about->image ));
            }
            
            About::find($about_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => __('About Page Section Updated With image Successfully'),
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        
        } else {

            About::find($about_id)->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);

            $notification = array(
                'message' => __('About Page Section Updated Without image Successfully'),
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        } 
    }

    // *************************************************************** //
    // *** About Page Sección (Core Values). Title and Description *** //
    // *************************************************************** //
    public function GetCore(){
        $core = Core::find(1);
        return view('admin.backend.about.get_core', compact('core'));
    }

    public function UpdateCore(Request $request){

        // dd($request->all());

        $core_id = $request->id;
        $core = Core::find($core_id);
        
        Core::find($core_id)->update([
            'title' => $request->title,
            // if description is empty, it will be null, handle it with ternary operator
            'description' => $request->description ? $request->description : '',
        ]);

        $notification = array(
            'message' => __('Core Page Section Updated Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 
    }

    // **************************************************************************** //
    // *** About Page Centric (Card Slides lado derecho). Title and Description *** //
    // **************************************************************************** //
    public function AllCentric(){
        $centric = Centric::latest()->get();
        return view('admin.backend.about.all_centric', compact('centric'));
    }
    // End Method 

    public function AddCentric(){
        return view('admin.backend.about.add_centric');
    }

    public function StoreCentric(Request $request){ 
    
        Centric::create([
            'title' => $request->title, 
            'description' => $request->description ? $request->description : '',
        ]);
        
        $notification = array(
            'message' => __('Centric Inserted Successfully'),
            'alert-type' => 'success'
        );
        return redirect()->route('all.centric')->with($notification); 
    }

    public function EditCentric($id){
        $centric = Centric::find($id);
        return view('admin.backend.about.edit_centric',compact('centric'));
    } 

    public function UpdateCentric(Request $request){

        $centric_id  = $request->id;

        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]);

        Centric::find($centric_id)->update([
            'title' => $request->title,
            'description' => $request->description ? $request->description : '',
        ]);

        $notification = array(
            'message' => __('Centric Updated Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->route('all.centric')->with($notification); 
    }

    public function DeleteCentric($id){

        Centric::find($id)->delete();

        $notification = array(
            'message' => __('Centric Deleted Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 
    }

    public function UpdateEditableCentric(Request $request, $id){

        $connect = Centric::findOrFail($id);
        $connect->update($request->only(['title', 'description']));
        
        return response()->json(['success' => true, 'message' => __('Updated successfully')]);
    }


}
