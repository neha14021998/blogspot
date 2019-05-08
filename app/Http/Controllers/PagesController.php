<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        return view('pages.services');
    }
}

