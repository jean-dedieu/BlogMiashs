<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
   public function show($post_name) {
        $post = \App\Post::where('post_name',$post_name)->first(); //get first post with post_name == $post_name
        $user_name=\App\User::where('id',$post->user_id)->first();
      
        return view('posts/single',array( //on passe le post à la vue
            'post' => $post,
            'user'=>$user_name,
            
            
            
        ));
     }
     
   
}
