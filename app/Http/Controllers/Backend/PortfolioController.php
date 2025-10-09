<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
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
        $categories = PortfolioCategory::latest()->get();
        return view('admin.backend.portfolio.add_portfolio', compact('categories'));
    }

    public function StorePortfolio(Request $request){

        // dd($request->all());

        $validate = $request->validate([
            'title' => 'required|string|max:200',
            'description_es' => 'nullable',
            'description_en' => 'nullable',
            'image' => 'required|image|mimes:jpg,jpeg,png,svg|max:3000',
            'category_id' => 'required|exists:portfolio_categories,id',
            'client' => 'required|string|max:200',
            'services' => 'required|string|max:200',
            'website' => 'required|url',
        ]);

        // La imagen es requerida
        $image = $request->file('image');
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $img = $manager->read($image);
        $img->resize(746,550)->save(public_path('upload/portfolio/'.$name_gen));
        $save_url = 'upload/portfolio/'.$name_gen;
        
        Portfolio::create([
            'title' => $request->title,
            'description_es' => $request->description_es ?? '',
            'description_en' => $request->description_en ?? '',
            'category_id' => $request->category_id,
            'client' => $request->client,
            'services' => $request->services,
            'website' => $request->website,
            'image' => $save_url,
        ]);
        

        $notification = array(
            'message' => __('Portfolio Inserted Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->route('all.portfolio')->with($notification); 
    }

    public function EditPortfolio($id){
        $portfolio = Portfolio::find($id);
        $categories = PortfolioCategory::latest()->get();
        return view('admin.backend.portfolio.edit_portfolio',compact('portfolio','categories'));
    }

    public function UpdatePortfolio(Request $request){

        // dd($request->all());

        $validate = $request->validate([
            'title' => 'required|string|max:200',
            'description_es' => 'nullable',
            'description_en' => 'nullable',
            // 'image' => 'required|image|mimes:jpg,jpeg,png,svg|max:3000',
            'category_id' => 'required|exists:portfolio_categories,id',
            'client' => 'required|string|max:200',
            'services' => 'required|string|max:200',
            'website' => 'required|url',
        ]);

        $portfolio_id = $request->id;
        $portfolio = Portfolio::find($portfolio_id);

        // Si hubo cambio en la imagen
        if ($request->file('image')) {

            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(746,550)->save(public_path('upload/portfolio/'.$name_gen));
            $save_url = 'upload/portfolio/'.$name_gen;
            
            if (file_exists(public_path($portfolio->image))) {
                @unlink(public_path($portfolio->image));
            }

            Portfolio::find($portfolio_id)->update([
                'title' => $request->title,
                'description_es' => $request->description_es ?? '',
                'description_en' => $request->description_en ?? '',
                'category_id' => $request->category_id,
                'client' => $request->client,
                'services' => $request->services,
                'website' => $request->website,
                'image' => $save_url,
            ]);
            

            $notification = array(
                'message' => __('Portfolio Updated With image Successfully'),
                'alert-type' => 'success'
            );

        }else{

            Portfolio::find($portfolio_id)->update([
                'title' => $request->title,
                'description_es' => $request->description_es ?? '',
                'description_en' => $request->description_en ?? '',
                'category_id' => $request->category_id,
                'client' => $request->client,
                'services' => $request->services,
                'website' => $request->website,
            ]);
            
            $notification = array(
                'message' => __('Portfolio Updated Successfully'),
                'alert-type' => 'success'
            );
        }

        return redirect()->route('all.portfolio')->with($notification); 
    }

    public function DeletePortfolio($id){

        $item = Portfolio::find($id);

        // If profile image exists delete
        if (file_exists(public_path($item->image ))) {
            @unlink(public_path($item->image ));
        }

        Portfolio::find($id)->delete();

        $notification = array(
            'message' => __('Portfolio Delete Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);   
    }




}
