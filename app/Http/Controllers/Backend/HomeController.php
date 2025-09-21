<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\App;
use App\Models\Clarifie;
use App\Models\Connect;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\Financial;
use App\Models\Video;
use Illuminate\Http\Request;

// Image Intervention Package
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class HomeController extends Controller
{
    // ************************ //
    // *** Features Section *** //
    // ************************ //
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

    // ************************ //
    // *** Clarifies Section *** //
    // ************************ //
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

    public function GetClarifieQuestions(){
        $clarifie = Clarifie::find(1);
        return view('admin.backend.clarifie.get_clarifie_questions', compact('clarifie'));
    }

    public function UpdateClarifieQuestions(Request $request){

        $clarifie_id = $request->id;
        $clarifie = Clarifie::find($clarifie_id);

        Clarifie::find($clarifie_id)->update([
            'question_1' => $request->question_1 ? $request->question_1 : '',
            'answer_1' => $request->answer_1 ? $request->answer_1 : '',

            'question_2' => $request->question_2 ? $request->question_2 : '',
            'answer_2' => $request->answer_2 ? $request->answer_2 : '',

            'question_3' => $request->question_3 ? $request->question_3 : '',
            'answer_3' => $request->answer_3 ? $request->answer_3 : '',
        ]);

        $notification = array(
            'message' => __('Clarifie Questions Updated Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 
    }



    // ************************ //
    // *** Financial Section *** //
    // ************************ //
    public function GetFinancial(){
        $financial = Financial::find(1);
        return view('admin.backend.financial.get_financial', compact('financial'));
    }

    public function UpdateFinancial(Request $request){

        // dd($request->all());

        $financial_id = $request->id;
        $financial = Financial::find($financial_id);

        if ($request->file('image')) {

            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(307,619)->save(public_path('upload/financial/'.$name_gen));
            $save_url = 'upload/financial/'.$name_gen;

            if (file_exists(public_path($financial->image ))) {
                @unlink(public_path($financial->image ));
            }
            
            Financial::find($financial_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $save_url,
                'title_tab1' => $request->title_tab1,
                'description_tab1' => $request->description_tab1,
                'title_tab2' => $request->title_tab2,
                'description_tab2' => $request->description_tab2,
            ]);

            $notification = array(
                'message' => __('Financial Updated With image Successfully'),
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        
        } else {

            Financial::find($financial_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'title_tab1' => $request->title_tab1,
                'description_tab1' => $request->description_tab1,
                'title_tab2' => $request->title_tab2,
                'description_tab2' => $request->description_tab2,
            ]);

            $notification = array(
                'message' => __('Financial Updated Without image Successfully'),
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        } 
    }

    // ************************ //
    // *** Video Section *** //
    // ************************ //
    public function GetVideo(){
        $video = Video::find(1);
        return view('admin.backend.video.get_video', compact('video'));
    }

    public function UpdateVideo(Request $request){

        // dd($request->all());

        $video_id = $request->id;
        $video = Video::find($video_id);

        if ($request->file('image')) {

            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(560,400)->save(public_path('upload/video/'.$name_gen));
            $save_url = 'upload/video/'.$name_gen;

            if (file_exists(public_path($video->image ))) {
                @unlink(public_path($video->image ));
            }
            
            Video::find($video_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $save_url,
                'youtube' => $request->youtube,
                'link' => $request->link,
            ]);

            $notification = array(
                'message' => __('Video Section Updated With image Successfully'),
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        
        } else {

            Video::find($video_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'youtube' => $request->youtube,
                'link' => $request->link,
            ]);

            $notification = array(
                'message' => __('Video Section Updated Without image Successfully'),
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        } 
    }

    public function AllConnect(){
        $connect = Connect::latest()->get();
        return view('admin.backend.connect.all_connect', compact('connect'));
    }
    // End Method 

    public function AddConnect(){
        return view('admin.backend.connect.add_connect');
    }

    public function StoreConnect(Request $request){ 
    
        Connect::create([
            'title' => $request->title, 
            'description' => $request->description, 
        ]);
        
        $notification = array(
            'message' => __('Connect Inserted Successfully'),
            'alert-type' => 'success'
        );
        return redirect()->route('all.connect')->with($notification); 
    }

    public function EditConnect($id){
        $connect = Connect::find($id);
        return view('admin.backend.connect.edit_connect',compact('connect'));
    } 

    public function UpdateConnect(Request $request){

        $connect_id  = $request->id;

        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]);

        Connect::find($connect_id)->update([
            'title' => $request->title,
            'description' => $request->description, 
        ]);

        $notification = array(
            'message' => __('Connect Updated Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->route('all.connect')->with($notification); 
    }

    public function DeleteConnect($id){

        Connect::find($id)->delete();

        $notification = array(
            'message' => __('Connect Deleted Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 
    }

    public function UpdateEditableConnect(Request $request, $id){

        $connect = Connect::findOrFail($id);
        $connect->update($request->only(['title', 'description']));
        
        return response()->json(['success' => true, 'message' => __('Updated successfully')]);
    }

    // ************************ //
    // *** FAQ Section *** //
    // ************************ //
    public function AllFaqs(){
        $features = Faq::latest()->get();
        return view('admin.backend.faqs.all_faqs', compact('features'));
    }

    public function AddFaqs(){ 
        return view('admin.backend.faqs.add_faqs');
    }

    public function StoreFaqs(Request $request){ 
    
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]);

        Faq::create([
            'title' => $request->title,
            'description' => $request->description, 
        ]);
        
        $notification = array(
            'message' => __('Faq Inserted Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->route('all.faqs')->with($notification); 
    }

    public function EditFaq($id){
        $faq = Faq::find($id);
        return view('admin.backend.faqs.edit_faq',compact('faq'));
    } 

    public function UpdateFaq(Request $request){

        $faq_id  = $request->id;

        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]);

        Faq::find($faq_id)->update([
            'title' => $request->title,
            'description' => $request->description, 
        ]);

        $notification = array(
            'message' => __('Faq Updated Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->route('all.faqs')->with($notification); 
    }

    public function DeleteFaq($id){

        Faq::find($id)->delete();

        $notification = array(
            'message' => __('Faq Deleted Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 
    }


    // ************************ //
    // *** App Mobile Section *** //
    // ************************ //
    public function UpdateEditableApp(Request $request, $id){

        $app = App::findOrFail($id);
        $app->update($request->only(['title', 'description']));
        
        return response()->json(['success' => true, 'message' => __('Updated successfully')]);
    }

    public function UpdateEditableAppImage(Request $request, $id){

        $apps = App::findOrFail($id);

        if ($request->file('image')) {

            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(306,481)->save(public_path('upload/apps/'.$name_gen));
            $save_url = 'upload/apps/'.$name_gen;

            if (file_exists(public_path($apps->image))) {
                @unlink(public_path($apps->image));
            }

            $apps->update([
                'image' => $save_url,
            ]);

            return response()->json([
                'success' =>  true,
                'image_url' => asset($save_url),
                'message' => __('Image Updated Successfully')
            ]);   
        }

        return response()->json(['success' => false, 'message' => __('Image Upload Failed')],400);
    }

    public function GetMobile(){
        $mobile = App::find(1);
        return view('admin.backend.mobile.get_mobile', compact('mobile'));
    }

    public function UpdateMobile(Request $request){

        // dd($request->all());

        $mobile_id = $request->id;
        $mobile = Financial::find($mobile_id);

        if ($request->file('image')) {

            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(306,481)->save(public_path('upload/apps/'.$name_gen));
            $save_url = 'upload/apps/'.$name_gen;

            if (file_exists(public_path($mobile->image ))) {
                @unlink(public_path($mobile->image ));
            }
            
            App::find($mobile_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => __('Mobile Updated With image Successfully'),
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        
        } else {

            App::find($mobile_id)->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);

            $notification = array(
                'message' => __('Mobile Updated Without image Successfully'),
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        } 
    }


}
