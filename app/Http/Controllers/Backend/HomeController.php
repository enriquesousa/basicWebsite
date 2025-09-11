<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Clarifie;
use App\Models\Feature;
use Illuminate\Http\Request;

// Image Intervention Package
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class HomeController extends Controller
{
    // *** Features *** //
    public function AllFeatures(){
        $features = Feature::latest()->get();
        return view('admin.backend.feature.all_feature', compact('features'));
    }

    public function AddFeature(){ 
        return view('admin.backend.feature.add_feature');
    }

    public function StoreFeature(Request $request){ 
    
        $request->validate([
            'title' => 'required',
            'icon' => 'nullable',
            'description' => 'nullable',
        ]);

        Feature::create([
                'title' => $request->title,
                'icon' => $request->icon,
                'description' => $request->description, 
            ]);
        
        $notification = array(
            'message' => __('Feature Inserted Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->route('all.features')->with($notification); 
    }

    public function EditFeature($id){
        $feature = Feature::find($id);
        return view('admin.backend.feature.edit_feature',compact('feature'));
    } 

    public function UpdateFeature(Request $request){

        $fea_id  = $request->id;

        $request->validate([
            'title' => 'required',
            'icon' => 'nullable',
            'description' => 'nullable',
        ]);

        Feature::find($fea_id)->update([
            'title' => $request->title,
            'icon' => $request->icon,
            'description' => $request->description, 
        ]);

        $notification = array(
            'message' => __('Feature Updated Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->route('all.features')->with($notification); 
    }

    public function DeleteFeature($id){

        Feature::find($id)->delete();

        $notification = array(
            'message' => __('Feature Deleted Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 
    }

    // *** Clarifies *** //
    public function GetClarifie(){
        $clarifie = Clarifie::find(1);
        return view('admin.backend.clarifie.get_clarifie', compact('clarifie'));
    }

    public function UpdateClarifie(Request $request){

        $clarifie_id = $request->id;
        $clarifie = Clarifie::find($clarifie_id);

        if ($request->file('image')) {

            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(302,618)->save(public_path('upload/clarifie/'.$name_gen));
            $save_url = 'upload/clarifie/'.$name_gen;

            if (file_exists(public_path($clarifie->image ))) {
                @unlink(public_path($clarifie->image ));
            }
            
            Clarifie::find($clarifie_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => __('Clarifie Updated With image Successfully'),
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        
        } else {

            Clarifie::find($clarifie_id)->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);

            $notification = array(
                'message' => __('Clarifie Updated Without image Successfully'),
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        } 
    }




}
