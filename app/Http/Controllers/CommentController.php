<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    //
    public function store(Request $request){

        // dd($request->all(), $request->comment_id);

        $validator = Validator::make($request->all(), [
            'nom' => 'required|min:10',
            'mail' => 'required',
            'comment' => 'required'
        ],[
            'required' => 'Ce champ est obligatoir',
            'min' => 'Le contenu de ce champ est trop court'
        ]);

        if ($validator->fails()) {
            dd($validator);
            return redirect()->back()->withErrors($validator)->withInput();
        } else {

            Comment::create([
                'nom' => $request->nom,
                'mail' => $request->mail,
                'comment' => $request->comment,
                'post_id' => $request->postId,
                'comment_id' => $request->commentId,
            ]);
            
            return back();
        }
        
        
        // $comment = new Comment;

        // $comment->comment = $request->comment;

        // $comment->user()->associate($request->user());

        // $post = Post::find($request->post_id);

        // $post->comments()->save($comment);

        // return back();
    }

   
}
