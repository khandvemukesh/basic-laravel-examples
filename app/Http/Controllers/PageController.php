<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function show(){
        return view('demo');
    }
     public function showAbout(string $id){
        return view('about', compact('id'));
    }
    // public function showAbout(){
    //     return view('about');
    // }
    public function showBlog(){
        return view('blog');
    }
    
    

}
