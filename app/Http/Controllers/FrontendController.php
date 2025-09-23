<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function OurTeam(){
        return view('home.team.our_team');
    }

    public function AboutUs(){
        return view('home.about.about_us');
    }
    
    public function Services(){
        return view('home.services.services_page');
    }



}
