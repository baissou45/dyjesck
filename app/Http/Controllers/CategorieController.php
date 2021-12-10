<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class CategorieController extends Controller{
    
    public function create(){
        return view('categories.create');
    }
    
    public function store(Request $request){
        
        $validator = Validator::make($request->all(),[
            'titre' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            Categorie::create([
                'titre' => $request->titre,
                'slug' => Str::slug($request->titre),
            ]);
        }
        
        
    }
}
