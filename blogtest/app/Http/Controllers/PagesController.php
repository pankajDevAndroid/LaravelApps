<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function home()
    {
        $technology = [
            'React JS',
            'React Native',
            'Laravel',
            'Android'
        ];

        return view('welcome', [
            'params' => $technology,
            'foo' => 'testing param',
            // 'foo'=> request('title'),
            // 'foo'=> '<script>alert("Testing Alert")</script>',
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function profile()
    {
        return view('profile');
    }
}
