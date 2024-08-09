<?php

namespace App\Http\Controllers;

class FirstController extends Controller
{
    public function homePage()
    {
        return view('homepage');
    }

    public function aboutPage()
    {
        return view('single-post');
    }
}
