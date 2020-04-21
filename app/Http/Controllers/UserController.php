<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function user_home(){
        return view('user/home');
    }
    public function user_profile(){
        return view('user/profile');
    }
    public function user_search(){
        return view('user/search');
    }
    public function user_upload(){
        return view('user/upload');
    }
    public function user_stories(){
        return view('user/stories');
    }
   
}
