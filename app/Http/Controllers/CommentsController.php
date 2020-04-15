<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
class CommentsController extends Controller
{
    //
    public function store(Post $post){
        Comment::create([
               'user_id' => auth()->id(),
               'post_id' => $post->id,
               'body' =>request('body')
        ]);

        return back();

    }
}
