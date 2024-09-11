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
        return '<h1>About Page</h1><a href="/">Back to Home</a>';
    }
}
