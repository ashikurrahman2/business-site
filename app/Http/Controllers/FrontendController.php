<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $abouts= About::all();
        $services= Service::all();
        return view('frontend.pages.index', compact('abouts', 'services'));   
    }

    public function About()
    {
        $abouts= About::all();
        return view('frontend.pages.about', compact('abouts'));   
    }

    public function Service()
    {
        $services= Service::all();
        return view('frontend.pages.service', compact('services'));   
    }


}
