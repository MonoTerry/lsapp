<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Choira'; 
        return view('pages.index') -> with('title',$title);
    }

    public function about() {
        $title = 'About Us'; 
        return view('pages.about')-> with('title',$title);
    }

    public function donate(){
        $title = 'Donate'; 
        return view('pages.donate')-> with('title',$title);
    }
    
    public function contact(){
        $title = 'Contact Us'; 
        return view('pages.contact')-> with('title',$title);
    }
    
    public function music(){
        $title = 'Our Music Collection'; 
        return view('pages.music')-> with('title',$title);
    }

    public function programs(){
        $title = 'Programmes'; 
        return view('pages.programs')-> with('title',$title);
    }

    public function shop(){
        $title = 'Our Shop'; 
        return view('pages.shop')-> with('title',$title);
    }
}
