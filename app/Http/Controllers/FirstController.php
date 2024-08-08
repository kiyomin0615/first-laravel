<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function homePage() {
        return '<h1>Home</h1><a href="/about">About 페이지 보기</a>';
    }

    public function aboutPage() {
        return '<h1>About</h1><a href="/">Home 페이지로 돌아가기</a>';
    }
}
