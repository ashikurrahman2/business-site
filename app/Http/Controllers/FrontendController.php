<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $abouts= About::all();
        return view('frontend.pages.index', compact('abouts'));   
    }

    public function About()
    {
        $abouts= About::all();
        return view('frontend.pages.about', compact('abouts'));   
    }

}
