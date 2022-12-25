<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Product;
use Image;
use File;


class ProductController extends Controller
{
    public function index(){
        return view("backend.product.add");
    }

    public function insert(Request $rqst){
        if($rqst->pic){
           $image=$rqst->file('pic');
           $custom=rand().".".$image->getClientOriginalExtension();
           $location=public_path('backend/productimage/'.$custom);
           Image::make($image)->save($location);
        }
        $product=new Product;   
        $product->name=$rqst->name;
        $product->des=$rqst->des;
        $product->price=$rqst->price;
        $product->dis=$rqst->dis;
        $product->status=$rqst->status;
        $product->image = $custom;
        $product->save();
        return redirect()->route("product.show");
    }

    public function show(){
        $products=Product::all();
        return view("backend.product.manage",compact("products"));
    }
    public function edit($id){
         $edit=Product::find($id);
         return view("backend.product.update",compact("edit"));
    }
    public function update(Request $rqst,$id){
             $update=Product::find($id);
             if($rqst->pic){
                // delete image
                if(File::exists("backend/productimage/".$update->image)){
                    File::delete("backend/productimage/".$update->image);
                    // insert image again
                    $image = $rqst->file('pic');
                    $custom = rand().".".$image->getClientOriginalExtension();
                    $location = public_path('backend/productimage/'.$custom);
                    Image::make($image)->save($location);
                    $update->image = $custom;
                }
                else{
                    $image = $rqst->file('pic');
                    $custom = rand().".".$image->getClientOriginalExtension();
                    $location = public_path('backend/productimage/'.$custom);
                    Image::make($image)->save($location);
                    $update->image = $custom;
                }
            }
             $update->name=$rqst->name;
             $update->des=$rqst->des;
             $update->price=$rqst->price;
             $update->dis=$rqst->dis;
             $update->status=$rqst->status;
             $update->update();
             return redirect()->route("product.show");
    }
    public function delete($id){
        $products=Product::find($id);
        if(File::exists("backend/productimage/".$products->image)){
            File::delete("backend/productimage/".$products->image);
        }
        $products->delete();
        return back();
    }
}
