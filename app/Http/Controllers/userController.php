<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function dashboard(){
        $user = auth()->user();
        
        return view('dashboard',['user'=>$user]);
    }
}
