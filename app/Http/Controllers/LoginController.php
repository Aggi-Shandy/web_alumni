<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Hash;
use \App\User;


class LoginController extends Controller
{
    public function index(){
        return view("component.login.index");
    }
    public function login(Request $req){
        $user = User::where("email", $req->input("email"))->first();
        if(isset($user)){
            if(Hash::check($req->input("password"), $user->password)){
                Session::put("user",$user);
                return redirect("admin");
            }
            else{
                return redirect("login");
            }
        }else{
            return redirect("login");
        }
    }
    public function logout(){
        Session::flush();
        return redirect("/login");
    }
}
