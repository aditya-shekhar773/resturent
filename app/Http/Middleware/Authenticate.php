<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    protected function redirectTo(Request $request): ?string
    {
        if($request->expectsJson()){
            return null;
        } 
        else{
            if($request->is('admin') || $request->is('admin/*')){
                return route('adminLogin');
            }
            elseif($request->is('user') || $request->is('user/*')){
                return route('user.login');
            }
            else{
                return route('login');
            }
        }
    }
}
