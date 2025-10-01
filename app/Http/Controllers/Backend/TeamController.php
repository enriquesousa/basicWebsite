<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Capability;
use App\Models\MemberDetail;
use App\Models\Team;
use Illuminate\Http\Request;

// Image Intervention
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class TeamController extends Controller
{
    public function AllTeam(){
        $team = Team::latest()->get();
        return view('admin.backend.team.all_team', compact('team'));
    }

    public function AddTeam(){ 
        return view('admin.backend.team.add_team' );
    }

    public function StoreTeam(Request $request){

        if ($request->file('image')) {

            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(306,400)->save(public_path('upload/team/'.$name_gen));
            $save_url = 'upload/team/'.$name_gen;
            
            Team::create([
                'name' => $request->name,
                'position' => $request->position, 
                'image' => $save_url,
            ]);
        }else{

            Team::create([
                'name' => $request->name,
                'position' => $request->position,
            ]);
        }

        $notification = array(
            'message' => __('Team Inserted Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->route('all.team')->with($notification); 
    }

    public function EditTeam($id){
        $team = Team::find($id);
        return view('admin.backend.team.edit_team',compact('team'));
    } 

    public function UpdateTeam(Request $request){

        $tem_id = $request->id; 
        $team = Team::find($tem_id);

        if ($request->file('image')) {

            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(306,400)->save(public_path('upload/team/'.$name_gen));
            $save_url = 'upload/team/'.$name_gen;

            if (file_exists(public_path($team->image ))) {
                @unlink(public_path($team->image ));
            }
            
            Team::find($tem_id)->update([
                'name' => $request->name,
                'position' => $request->position, 
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => __('Team Updated With image Successfully'),
                'alert-type' => 'success'
            );
    
            return redirect()->route('all.team')->with($notification); 
        
        } else {

            Team::find($tem_id)->update([
                'name' => $request->name,
                'position' => $request->position, 
            ]);

            $notification = array(
                'message' => __('Team Updated Without image Successfully'),
                'alert-type' => 'success'
            );
    
            return redirect()->route('all.team')->with($notification);
        } 
    }

    public function DeleteTeam($id){

        $item = Team::find($id);
        // If $item->image == null then no image
        if (file_exists(public_path($item->image ))) {
            @unlink(public_path($item->image ));
        }

        $member_detail = MemberDetail::where('team_id', $id)->first(); // Preparar para borrar la imagen del hd
        if (file_exists(public_path($member_detail->image ))) {
            @unlink(public_path($member_detail->image ));
        }

        Team::find($id)->delete();

        $notification = array(
            'message' => __('Team Delete Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);   
    }

    // *** Handle Image, Description, and Social Links *** //
    public function DetailsTeam($id){

        $team = Team::find($id);

        $teamDetails = MemberDetail::where('team_id', $team->id)->first();
        // dd($teamDetails); // Si no encuentra id me regresa null
        // if ($teamDetails == null) create new record
        if ($teamDetails == null) {
            MemberDetail::create([
                'team_id' => $team->id,
            ]);
            $teamDetails = MemberDetail::where('team_id', $team->id)->first();
        }

        return view('admin.backend.team.details_team',compact('team','teamDetails'));
    }

    public function UpdateDetailsTeam(Request $request){

        // dd($request->all());

        $member_details_id = $request->id;
        $member_details = MemberDetail::find($member_details_id);

        if ($request->file('image')) {

            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(526,550)->save(public_path('upload/team/'.$name_gen));
            $save_url = 'upload/team/'.$name_gen;

            if (file_exists(public_path($member_details->image ))) {
                @unlink(public_path($member_details->image ));
            }
            
            MemberDetail::find($member_details_id)->update([
                'description' => $request->description ? $request->description : '',
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => __('Details Page Updated With image Successfully'),
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        
        } else {

            MemberDetail::find($member_details_id)->update([
                'description' => $request->description ? $request->description : '',
            ]);

            $notification = array(
                'message' => __('Details Page Updated Without image Successfully'),
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
        } 
    }

    public function UpdateDetailsSocialLinks(Request $request){

        // dd($request->all());

        $member_details_id = $request->id;
        $member_details = MemberDetail::find($member_details_id);

        MemberDetail::find($member_details_id)->update([
            'facebook_url' => $request->facebook_url ? $request->facebook_url : '',
            'facebook_status' => $request->facebook_status ? $request->facebook_status : '0',
            'x_url' => $request->x_url ? $request->x_url : '',
            'x_status' => $request->x_status ? $request->x_status : '0',
            'instagram_url' => $request->instagram_url ? $request->instagram_url : '',
            'instagram_status' => $request->instagram_status ? $request->instagram_status : '0',
            'linkedin_url' => $request->linkedin_url ? $request->linkedin_url : '',
            'linkedin_status' => $request->linkedin_status ? $request->linkedin_status : '0',
            'whatsapp_url' => $request->whatsapp_url ? $request->whatsapp_url : '',
            'whatsapp_status' => $request->whatsapp_status ? $request->whatsapp_status : '0',
            'web_url' => $request->web_url ? $request->web_url : '',
            'web_status' => $request->web_status ? $request->web_status : '0',
        ]);

        $notification = array(
            'message' => __('Social Links Updated Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 
    }

    // *** Handle Capabilities CRUD *** //
    // public function AllCapabilities($id){
    //     $capabilities = Capability::latest()->get();
    //     return view('admin.backend.team.all_capabilities', compact('capabilities'));
    // }

    public function StoreCapability(Request $request){
        
        // dd($request->all());

        Capability::insert([
            'team_id' => $request->id,
            'description' => $request->description, 
        ]);

        $notification = array(
            'message' => __('Capability Inserted Successfully'),
            'alert-type' => 'success'
         ); 
         return redirect()->back()->with($notification);
    }

    public function EditCapability($id){
        $capability = Capability::find($id);
        return response()->json($capability);
    }

    public function UpdateCapability(Request $request){

        // dd($request->all());

        $id = $request->cap_id;

        Capability::find($id)->update([
            'description' => $request->description,
        ]);

        $notification = array(
            'message' => __('Capability Updated Successfully'),
            'alert-type' => 'success'
        ); 
        return redirect()->back()->with($notification);
    }

    public function DeleteCapability($id){

        Capability::find($id)->delete();

        $notification = array(
            'message' => __('Capability Deleted Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);   
    }

    






    
}
