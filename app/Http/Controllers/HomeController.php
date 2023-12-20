<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Auth;

class HomeController extends Controller
{
    public function home(Request $req){
        $data['categories'] = Category::all();
        return view('home.index', $data);
    }

    public function login(Request $req){
        if($req->isMethod('post')){
            $data = $req->validate([
                "email" => "required",
                "password" => "required",
            ]);


            if(Auth::attempt($data)){
                $user = Auth::user();
                $user->update([
                    'ip_address' => $req->ip(),
                    'login_time' => now()
                ]);

                return redirect()->route('home');
            }else{
                return redirect()->back();
            }
        }
        return view('home.login');
    }

    public function logout(Request $req){

        $user = Auth::user();

        if ($user) {
            $user->update([
                'logout_time' => now(),
            ]);
        }

        Auth::logout();
        return redirect()->route('home');
    }

    public function register(Request $req){
        if($req->isMethod('post')){
            $data = $req->validate([
                "name" => "required",
                "email" => "required",
                "password" => "required",
            ]);

            $data['password'] = bcrypt($data['password']);

            User::create($data);
            return redirect()->route('home.login');
        }
        return view('home.register');
    }
}
