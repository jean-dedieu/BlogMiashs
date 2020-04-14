<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Comments;
use App\Auth;

class PostsController extends Controller
{
    //pour afficher les posts
   public function show($post_name) {
        $post = \App\Post::where('post_name',$post_name)->first(); //get first post with post_name == $post_name
        $user_name=\App\User::where('id',$post->user_id)->first();
      
        return view('posts/single',array( //on passe le post à la vue
            'post' => $post,
            'user'=>$user_name,
            
            
            
        ));
     }

     
     /*pour envoi de commentaire

     public function comment(Request $request, $post_name){
          
             $this->validate($request,[
             'comment' => 'required'
             ]);


             $comment = new comment;
             $comment->user_id = Auth::user()->id;
             $comment->post_name = $post_name;
             $comment->comment = $request->input('comment');
             $comment->save();

             return redirect("/articles/{$post_name}")->with('response','votre commentaire a été ajouté avec succès');


        return $post_name;

     }*/
   
}
