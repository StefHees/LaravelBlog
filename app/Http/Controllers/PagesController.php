<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        
        
        $text = "Hello this is the learn2code app.";
        return view('pages.index', compact('text'));
    }

    public function about(){
        $text = "This is the about page.";
        return view('pages.about')->with('text', $text);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Applications', 'Design', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
