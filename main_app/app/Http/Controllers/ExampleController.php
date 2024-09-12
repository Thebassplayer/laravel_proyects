<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homePage() {
        $myName = 'Roy';
        $animals = ['cat', 'dog', 'fish'];
        return view('homepage', ['name' => $myName, 'Allanimals' => $animals ]);
    }

    public function aboutPage() {
        return view('single-post');
    }
}
