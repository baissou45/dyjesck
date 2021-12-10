<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Post;
use Illuminate\Http\Request;

class RouteController extends Controller{

    public function accueuil(){
        $posts = Post::orderBy('id', 'desc')->get();
        return view('accueuil', compact('posts'));
    }

    public function contact(){
        return view('contact');
    }
    
    public function realisations(){
        $posts = Post::paginate(4);
        $categories = Categorie::all();
        return view('realisations', compact('categories', 'posts'));
    }

    public function realisation($slug){
        $post = Post::where('slug', $slug)->first();
        $posts = Post::paginate(4);
        $categories = Categorie::all();
        
        return view('realisation', compact('post','categories', 'posts'));
    }
    
    public function apropos(){
        return view('apropos');
    }

    public function qui(){
        return view('quiSomNs');
    }

    public function domaines(){
        return view('domaines');
    }

    public function equipe(){
        return view('equipe');
    }

    public function pouquoiNous(){
        return view('pouquoiNous');
    }
}
