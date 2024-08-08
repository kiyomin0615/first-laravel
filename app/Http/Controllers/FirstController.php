<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function homePage() {
        return view('homepage');
    }

    public function aboutPage() {
        $name = '구교민';
        $age = 30;
        $stackList = ['C', 'C#', 'JS', 'TS', 'PHP', 'Express', 'Laravel', 'SQL', 'MongoDB', 'Linux', 'Git', 'Docker', 'Networking'];
        return view('aboutpage', ['name' => $name, 'age' => $age, 'stackList' => $stackList]);
    }
}
