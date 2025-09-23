<?php

namespace App\Http\Controllers;

use App\Models\MobileService;
use App\Models\Service;
use Illuminate\Http\Request;

// Image Intervention Package
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ServiceController extends Controller
{
    
    public function GetPageServices(){
        $service = Service::find(1);
        return view('admin.backend.services.get_service', compact('service'));
    }

    public function UpdatePageServices(Request $request){

        $service_id = $request->id;
        $service = Service::find($service_id);

        if ($request->file('image')) {

            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(526,550)->save(public_path('upload/services/'.$name_gen));
            $save_url = 'upload/services/'.$name_gen;

            if (file_exists(public_path($service->image ))) {
                @unlink(public_path($service->image ));
            }
            
            Service::find($service_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => __('Service Updated With image Successfully'),
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        
        } else {

            Service::find($service_id)->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);

            $notification = array(
                'message' => __('Service Updated Without image Successfully'),
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        } 
    }

    public function GetPageServicesMobile(){
        $mobile = MobileService::find(1);
        return view('admin.backend.services.get_service_mobile', compact('mobile'));
    }

    public function UpdatePageServicesMobile(Request $request){

        // dd($request->all());

        $mobile_id = $request->id;
        $mobile = MobileService::find($mobile_id);

        if ($request->file('image')) {

            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(306,481)->save(public_path('upload/services/'.$name_gen));
            $save_url = 'upload/services/'.$name_gen;

            if (file_exists(public_path($mobile->image ))) {
                @unlink(public_path($mobile->image ));
            }
            
            MobileService::find($mobile_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => __('Mobile Banner Updated With image Successfully'),
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        
        } else {

            MobileService::find($mobile_id)->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);

            $notification = array(
                'message' => __('Mobile Banner Updated Without image Successfully'),
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        } 
    }

}
