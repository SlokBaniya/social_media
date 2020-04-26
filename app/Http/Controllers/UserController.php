<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function user_home(){
        
        return view('user/home');
    }
    public function user_profile(){
        $user = auth()->user();
        return view('user/profile')->with('user',$user);
    }
    public function user_viewUserProfile($username){
       
        $user= \App\User::with('id')->where('name',$username)->first();
        dd($user);
    	if(!$user) {
    		return response('User not found', 404);
    	}

    	$followers= $user->follower_id;
    	$following= $user->user_id;
        

        return view('profile')->with(['user'=>$user]);
    
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

    public function user_header(){
        return view('user/header');
    }
   
}
