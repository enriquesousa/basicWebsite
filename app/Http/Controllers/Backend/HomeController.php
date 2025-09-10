<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class HomeController extends Controller
{
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


}
