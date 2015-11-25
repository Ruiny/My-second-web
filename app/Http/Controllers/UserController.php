<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request as Request;

class UserController extends Controller
{

    public function login(){
        return view("login");
    }

    public function submitLogin(Request $request){
        $username=$request["username"];
        $password=$request["password"];

        if($username=="zeno"&&$password=="123"){
            $request->session()->push("user",$username);
            return "success";
        }
        else
            return redirect('/user/login');
    }

}


