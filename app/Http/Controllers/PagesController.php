<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to laravel Class";
        //   first way
        //return view('pages.index', compact('title')); 
            //second way
        return view('pages.index')-> with('title', $title);
    }

    public function about(){
        $title2 = "ADD NEW EMPLOYEE";
        return view('pages.about')->with('title2',$title2); 
    }

    public function services(){
            $data = array(
                'title' => 'Services',
                'services' => ['Web Design', 'Programming', 'SEO']
            );
        return view('pages.services')->with($data); 
    }

}
