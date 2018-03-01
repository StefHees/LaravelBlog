<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        
        
        $text = "Welcome to our blog application!";
        return view('pages.index', compact('text'));
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Applications', 'Design', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
