<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller{

    public function accueuil(){
        return view('accueuil');
    }

    public function contact(){
        return view('contact');
    }
    
    public function realisations(){
        return view('realisations');
    }

    public function realisation($slug){
        return view('realisation');
    }
    
}
