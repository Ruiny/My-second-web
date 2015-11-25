<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request as Request;
use App\Facades\MymailFacade as Mymail;

class ProductController extends Controller
{

    public function index(){
        $products = Product::all();
        return view('product.index', ['products' =>$products]);
    }
    public function show($id){
        $p = Product::find($id);
        return view('product.show',['product'=>$p]);
    }

    public function edit($id=NULL){
        if(isset($id))
            $p = Product::find($id);
        else $p= new Product();
        return view('product.edit',['product'=>$p]);
    }
    public function save(Request $request,$id=NULL){
        if(isset($id)){
            Product::updateOrCreate(["id"=>$id],$request->input());
        }
        else Product::create($request->input());
        return redirect("/products");
    }
    public function delete($id){
        Product::find($id)->delete();
        return redirect("/products");
    }

    public function testsend(){
        Mymail::send(",yes it is sent by Mymail.");
    }
    public function testreceive(){
        Mymail::receive(",ok received through Mymail.");
    }
}


