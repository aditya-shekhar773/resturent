<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Admin;
use Auth;


class AdminController extends Controller
{
    public function dashboard(Request $req){

        $data['categories'] = Category::count();
        $data['products'] = Product::count();
        return view('admin.dashboard',$data);
    }

    public function login(Request $req){
        if($req->isMethod("post")){
            $data = $req->validate([
                "email" => "required",
                "password" => "required",
            ]);
            
            if (Auth::guard("admin")->attempt($data)) { 
                
                return redirect('/admin');
            } else {
                return redirect()->back();
            }
        }
        return view('admin.adminLogin');
    }

    public function logout(Request $req){
        Auth::guard("admin")->logout();
        return redirect()->route('home');
    }
}
