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
            'img2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15000',
            'img3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15000',
            'img4' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15000',
        ],[
            'required' => 'Ce champ est obligatoir',
            'min' => 'Le contenu de ce champ est trop court'
        ]);

        if ($validator->fails()) {
            return redirect('post')
                ->withErrors($validator)
                ->withInput();
        }
        // $image = $request->file('image');

        // $input['image'] = time() . '.' . $image->getClientOriginalExtension();

        // $destinationPath = public_path('/blogimage');

        // $img = Image::make($image->getRealPath());

        // $img->resize(860, 500, function ($constraint) {

        //     $constraint->aspectRatio();
        // })->save($destinationPath . '/' . $input['image']);


        // $destinationPath = public_path('/image');

        // $image->move($destinationPath, $input['image']);


        // $finalimage = $this->postImage->add($input);

        Post::create([
            'titre' => $request->titre,
            'slug' => Str::slug($request->titre),
            'description' => $request->description,
            'date' => $request->date,
            'categorie_id' => $request->categ,
            'user_id' => auth()->user()->id,
            'epingle' => $epingle,
            // 'img' => $request->img,
            // 'img1' => $request->img1,
            // 'img2' => $request->img2,
            // 'img3' => $request->img3,
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
