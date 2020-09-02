<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        $title = 'Welcome to Laravel Start Kit Pages';

        #Different ways to use template and pass data
        //return 'index page';
        //return view('pages.index');
        //return view('pages.index',compact('title') );
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title = 'About';
        return view('pages.about')->with('title',$title);
    }

    public function contactus(){
        $title = 'Contact Us';
        return view('pages.contactus')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title'     => 'Services',
            'services'  => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
