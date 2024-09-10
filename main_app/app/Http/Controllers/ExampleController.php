<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homePage() {
        return '<h1>Home Page</h1><a href="/about">About</a>';
    }

    public function aboutPage() {
        return '<h1>About Page</h1><a href="/">Back to Home</a>';
    }
}
