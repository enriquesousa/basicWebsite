<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

// Image Intervention Package
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class PortfolioController extends Controller
{
    public function AllPortfolio(){
        $portfolio = Portfolio::latest()->get();
        return view('admin.backend.portfolio.all_portfolio', compact('portfolio'));
    }

    public function AddPortfolio(){
        return view('admin.backend.portfolio.add_portfolio');
    }

    public function StorePortfolio(Request $request){

        dd($request->all());

        $validate = $request->validate([
            'title' => 'required',
            'description_es' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png',
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(746,550)->save(public_path('upload/portfolio/'.$name_gen));
            $save_url = 'upload/portfolio/'.$name_gen;
            
            Portfolio::create([
                'title' => $request->title,
                'description_es' => $request->description_es,
                'image' => $save_url,
            ]);
        }else{
            Portfolio::create([
                'title' => $request->title,
                'description_es' => $request->description_es,
            ]);
        }

        $notification = array(
            'message' => __('portfolio Inserted Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->route('all.portfolio')->with($notification); 
    }


}
