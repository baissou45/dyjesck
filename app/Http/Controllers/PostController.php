<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Validation\Validator;

class PostController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(){
        $posts = Post::take(5)->get();

        return view('post.index', compact('posts'));
    }

    public function create(){
        $categories = Categorie::all();

        return view('post.create',[
            'categories' => $categories
        ]);
    }

    public function store(Request $request){



        $epingle = false;

        if ($request->epingle) {
            $epingle = true;
        }

        $validator = Validator::make($request->all(), [
            'titre' => 'required|min:3',
            'description' => 'required|min:10',
            'date' => 'required',
            'categ' => 'required',
            'epingle' => 'nullable',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15000',
            'imga' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15000',
            'imgb' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15000',
            'imgc' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15000',
        ],[
            'required' => 'Ce champ est obligatoir',
            'min' => 'Le contenu de ce champ est trop court'
        ]);

        if ($validator->fails()) {
            return redirect('post')
                ->withErrors($validator)
                ->withInput();
        }

        $image = $request->file('img');

        $imagea = $request->file('imga');

        $imageb = $request->file('imgb');

        $imagec = $request->file('imgc');

        //image Principale

        $input['img'] = date('Y_m_d-H:i:s').'_'.$request->titre.'_img'.'.'.$image->getClientOriginalExtension();
        //$input['img'] = date('Y-m-d-H:i:s')."-".time()."-".$image->getClientOriginalName();
        $destinationPath = public_path('/postimage');

        Image::make($image->getRealPath())->resize(860, 500, function ($constraint) {
		    $constraint->aspectRatio();
		})->save($destinationPath.'/'.$input['img']);

        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $input['img']);

        $imgsize=$destinationPath.'/'.$input['img'];


        //imege 1


        $input['imga'] = date('Y_m_d-H:i:s').'_'.$request->titre.'_imga'.'.'.$imagea->getClientOriginalExtension();
        //$input['imga'] = date('Y-m-d-H:i:s')."-".time()."-".$imagea->getClientOriginalName();
        $destinationPath = public_path('/postimage');

        Image::make($imagea->getRealPath())->resize(860, 500, function ($constraint) {
		    $constraint->aspectRatio();
		})->save($destinationPath.'/'.$input['imga']);

        $destinationPath = public_path('/uploads');
        $imagea->move($destinationPath, $input['imga']);

        $imgasize=$destinationPath.'/'.$input['imga'];



        //image 2



        $input['imgb'] = date('Y_m_d-H:i:s').'_'.$request->titre.'_imgb'.'.'.$imageb->getClientOriginalExtension();
        //$input['imgb'] = date('Y-m-d-H:i:s')."-".time()."-".$imageb->getClientOriginalName();
        $destinationPath = public_path('/postimage');

        Image::make($imageb->getRealPath())->resize(860, 500, function ($constraint) {
		    $constraint->aspectRatio();
		})->save($destinationPath.'/'.$input['imgb']);

        $destinationPath = public_path('/uploads');
        $imageb->move($destinationPath, $input['imgb']);

        $imgbsize=$destinationPath.'/'.$input['imgb'];


        //image 3




        $input['imgc'] = date('Y_m_d-H:i:s').'_'.$request->titre.'_imgc'.'.'.$imagec->getClientOriginalExtension();
        //$input['imgc'] = date('Y-m-d-H:i:s')."-".time()."-".$imagec->getClientOriginalName();
        $destinationPath = public_path('/postimage');

        Image::make($imagec->getRealPath())->resize(860, 500, function ($constraint) {
		    $constraint->aspectRatio();
		})->save($destinationPath.'/'.$input['imgc']);

        $destinationPath = public_path('/uploads');
        $imagec->move($destinationPath, $input['imgc']);

        $imgcsize=$destinationPath.'/'.$input['imgc'];



        Post::create([
            'titre' => $request->titre,
            'slug' => Str::slug($request->titre),
            'description' => $request->description,
            'date' => $request->date,
            'categorie_id' => $request->categ,
            'user_id' => auth()->user()->id,
            'epingle' => $epingle,
            'img' => $imgsize,
            'imga' => $imgasize,
            'imgb' => $imgbsize,
            'imgc' => $imgcsize,
        ]);

        return redirect()->back();
    }

    public function show(Post $post)
    {
        return view('post.single', compact('post'));
    }

    public function categorie($slug){
        $categories = Categorie::all();
        $categorie = Categorie::where('slug', $slug)->first();
        $posts = $categorie->posts()->paginate(4);
        
        return view('realisations', compact('posts', 'categories'));
    }
}
