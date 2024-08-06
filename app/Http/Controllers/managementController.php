<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;



class managementController extends Controller
{
    function addproducts(Request $request){
        $new_product = new product;
        $new_product->productsName = $request->name;
        $new_product->productsPrice = $request->price;
        $new_product->category_id = $request->type;
        // $new_product->product_photo = $request->img;
        if($request->hasFile('img')){
            $file = $request->file('img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/product/',$filename);
            $new_product->product_photo = $filename;
        }
        $new_product->save();
        return redirect('/management');
    }
    function editpro(Request $request)
    {
        $newpro = product::find($request->id);
        $editid = $newpro->id;
        $editfood = $newpro->productsName;
        $editprice = $newpro->productsPrice;
        return view("/edit", compact('editid','editfood', 'editprice'));
    }
    function editname(Request $request)
    {
        $newpro = product::find($request->id);
        $newpro->productsName = $request->productsName;
        $newpro->productsPrice = $request->productsPrice;
        $newpro->save();
        return redirect('/management');
    }
    function insertz(Request $rq)
    {
        if($rq->depID==NULL || $rq->depID==1 ) $categorys=category::find(1);
        else if($rq->depID==2) $categorys=category::find(2);
        else $categorys=category::find(3);
        // echo $categorys;
        return view('management',compact('categorys'));
    }
    function deleteproduct(Request $request)
    {
        product::destroy($request->id);
        return redirect('/management');
    }
    // function inserttable(){
        
    // }
    // function billpage(Request $rq){
    //     if($rq->id==NULL){
    //         $dep = Department::find(1);
    //     }
    //     else{
    //         $dep = Department::find($rq->id);
    //     }
    //     return view('management', compact('dep'));
    // }
}
