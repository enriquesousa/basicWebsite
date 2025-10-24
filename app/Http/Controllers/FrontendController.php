<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\Capability;
use App\Models\MemberDetail;
use App\Models\Portfolio;
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

    public function showPortfolio(Request $request){
        // dd($request->all());

        $id = $request->item_id;
        $portfolio = Portfolio::findOrFail($id);
        $todosLosPortfolios = Portfolio::all();

        // Create code to get one portfolio before and one after except this one, if is the last one, get the first one
        $allPortfolios = Portfolio::where('id', '<', $id)
            ->orderBy('id', 'desc')
            ->take(1)
            ->get()
            ->concat(Portfolio::where('id', '>', $id)
                ->orderBy('id', 'asc')
                ->take(1)
                ->get());
        // dd($allPortfolios);

        if ($allPortfolios->isEmpty()) {
            $allPortfolios = Portfolio::orderBy('id', 'asc')->take(2)->get();
        }

        // if id is the last one, get the first one and add it to the end of the collection $allPortfolios
        if ($portfolio->id == $todosLosPortfolios->last()->id) {
            $firstPortfolio = Portfolio::orderBy('id', 'asc')->first();
            $allPortfolios->push($firstPortfolio);
        }
        // dd($allPortfolios);

        // if id is the first one, get the last one and add it to the beginning of the collection $allPortfolios
        if ($portfolio->id == $todosLosPortfolios->first()->id) {
            $lastPortfolio = Portfolio::orderBy('id', 'desc')->first();
            $allPortfolios->prepend($lastPortfolio);
        }
        // dd($allPortfolios);

        // dd($portfolio);
        return view('home.portfolio.portfolio_details', compact('portfolio', 'allPortfolios'));
    }

    public function BlogPage(){
        $blogCategories = BlogCategory::latest()->withCount('posts')->get();
        $posts = BlogPost::latest()->limit(5)->get();
        $recentPosts = BlogPost::latest()->limit(3)->get();
        return view('home.blog.list_blog', compact('blogCategories','posts','recentPosts'));
    }

    public function BlogPageDetails($slug){
        // dd($slug);
        $blogPost = BlogPost::where('post_slug', $slug)->first();
        $blogCategories = BlogCategory::latest()->withCount('posts')->get();
        $recentPosts = BlogPost::latest()->limit(3)->get();
        return view('home.blog.blog_detail',compact('blogPost','blogCategories','recentPosts'));
    }

    public function BlogCategory($id){
        $blogPost = BlogPost::where('blog_category_id', $id)->get();
        $categoryName = BlogCategory::where('id', $id)->first();
        $blogCategories = BlogCategory::latest()->withCount('posts')->get();
        $recentPosts = BlogPost::latest()->limit(3)->get();
        return view('home.blog.blog_category',compact('blogPost','blogCategories','recentPosts', 'categoryName'));
    }




}
