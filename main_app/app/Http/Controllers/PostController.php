<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showCreateForm(){
        return view('create-post');
    }

    public function storeNewPost(Request $request){
        $userId = auth()->id();

        $incomingFields = $request->validate([
            'title'=> ['required', 'min:3', 'max:30'],
            'body'=> ['required', 'min:3', 'max:500'],
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = $userId;

        Post::create($incomingFields);
    }
}
