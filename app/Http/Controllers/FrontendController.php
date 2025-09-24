<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function OurTeam(){
        return view('home.team.our_team');
    }

    public function TeamDetail($id){
        $teamDetail = Team::find($id);
        return view('home.team.team_detail', compact('teamDetail'));
    }

    public function AboutUs(){
        return view('home.about.about_us');
    }
    
    public function Services(){
        return view('home.services.services_page');
    }



}
