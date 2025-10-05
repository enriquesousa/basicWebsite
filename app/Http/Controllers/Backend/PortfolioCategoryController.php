<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioCategoryController extends Controller
{
    public function AllPortfolioCategories(){
        $categories = PortfolioCategory::latest()->get();
        return view('admin.backend.portfolio_category.all_portfolio_categories', compact('categories'));
    }

    public function AddPortfolioCategory(){ 
        return view('admin.backend.portfolio_category.add_portfolio_categories');
    }

    public function StorePortfolioCategory(Request $request){ 
    
        $request->validate([
            'name' => ['required', 'string', 'max:200'],
        ]);

        $category = new PortfolioCategory();
        $category->name = $request->name;
        $category->slug = str()->slug($request->name);
        $category->save();
        
        $notification = array(
            'message' => __('Portfolio Category Inserted Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->route('all.portfolio.categories')->with($notification); 
    }

    public function EditPortfolioCategory($id){
        $portfolio_category = PortfolioCategory::find($id);
        return view('admin.backend.portfolio_category.edit_portfolio_categories',compact('portfolio_category'));
    }

    public function UpdatePortfolioCategory(Request $request){

        $category_id  = $request->id;

        $request->validate([
            'name' => ['required', 'string', 'max:200'],
        ]);

        PortfolioCategory::find($category_id)->update([
            'name' => $request->name,
            'slug' => str()->slug($request->name),
        ]);

        $notification = array(
            'message' => __('Portfolio Category Updated Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->route('all.portfolio.categories')->with($notification); 
    }

    public function DeletePortfolioCategory($id){

        PortfolioCategory::find($id)->delete();

        $notification = array(
            'message' => __('Portfolio Category Deleted Successfully'),
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 
    }

}
