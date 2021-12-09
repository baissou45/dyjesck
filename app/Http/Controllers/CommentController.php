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

        // dd($request->all(), $request->commentaire_id);

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
                'post_id' => $request->post_id,
                'commentaire_id' => $request->commentaire_id,
                
            ]);
            
        }
        
        
        // $comment = new Comment;

        // $comment->comment = $request->comment;

        // $comment->user()->associate($request->user());

        // $post = Post::find($request->post_id);

        // $post->comments()->save($comment);

        // return back();
    }

    public function reponseStore(Request $request)
    {
        $reponseComment = new Comment();

        $reponseComment->comment = $request->get('comment');

        $reponseComment->user()->associate($request->user());

        $reponseComment->parent_id = $request->get('comment_id');

        $post = Post::find($request->get('post_id'));

        $post->comments()->save($reponseComment);

        return back();
    }
}
