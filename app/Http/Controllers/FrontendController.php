<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Capability;
use App\Models\MemberDetail;
use App\Models\Skill;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function OurTeam(){
        return view('home.team.our_team');
    }

    public function TeamDetail(Request $request){
        $id = $request->item_id;
        $teamMember = Team::find($id);
        $details = MemberDetail::where('team_id', $teamMember->id)->first();
        $capabilities = Capability::where('team_id', $teamMember->id)->get();
        $attributes = Attribute::where('team_id', $teamMember->id)->get();
        $skills = Skill::where('team_id', $teamMember->id)->get();
        return view('home.team.team_detail', compact('teamMember', 'details', 'capabilities', 'attributes', 'skills'));
    }

    public function AboutUs(){
        return view('home.about.about_us');
    }
    
    public function Services(){
        return view('home.services.services_page');
    }

    public function Portfolio(){
        return view('home.portfolio.portfolio_page');
    }



}
