<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    //
    public function __construct() {
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
            'date' => 'nullable',
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

        // Image::make($image->getRealPath())->resize(860, 500, function ($constraint) {
		//     $constraint->aspectRatio();
		// })->save($destinationPath.'/'.$input['img']);

        // $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $input['img']);

        $imgsize='postimage/'.$input['img'];


        //imege 1


        $input['imga'] = date('Y_m_d-H:i:s').'_'.$request->titre.'_imga'.'.'.$imagea->getClientOriginalExtension();
        //$input['imga'] = date('Y-m-d-H:i:s')."-".time()."-".$imagea->getClientOriginalName();
        $destinationPath = public_path('/postimage');

        // Image::make($imagea->getRealPath())->resize(860, 500, function ($constraint) {
		//     $constraint->aspectRatio();
		// })->save($destinationPath.'/'.$input['imga']);

        // $destinationPath = public_path('/uploads');
        $imagea->move($destinationPath, $input['imga']);

        $imgasize='postimage/'.$input['imga'];



        //image 2



        $input['imgb'] = date('Y_m_d-H:i:s').'_'.$request->titre.'_imgb'.'.'.$imageb->getClientOriginalExtension();
        //$input['imgb'] = date('Y-m-d-H:i:s')."-".time()."-".$imageb->getClientOriginalName();
        $destinationPath = public_path('/postimage');

        // Image::make($imageb->getRealPath())->resize(860, 500, function ($constraint) {
		//     $constraint->aspectRatio();
		// })->save($destinationPath.'/'.$input['imgb']);

        // $destinationPath = public_path('/uploads');
        $imageb->move($destinationPath, $input['imgb']);

        $imgbsize='postimage/'.$input['imgb'];


        //image 3




        $input['imgc'] = date('Y_m_d-H:i:s').'_'.$request->titre.'_imgc'.'.'.$imagec->getClientOriginalExtension();
        //$input['imgc'] = date('Y-m-d-H:i:s')."-".time()."-".$imagec->getClientOriginalName();
        $destinationPath = public_path('/postimage');

        // Image::make($imagec->getRealPath())->resize(860, 500, function ($constraint) {
		//     $constraint->aspectRatio();
		// })->save($destinationPath.'/'.$input['imgc']);

        // $destinationPath = public_path('/uploads');
        $imagec->move($destinationPath, $input['imgc']);

        $imgcsize='postimage/'.$input['imgc'];



        Post::create([
            'titre' => $request->titre,
            'slug' => Str::slug($request->titre),
            'description' => $request->description,
            'date' => $request->date,
            'categorie_id' => $request->categ,
            'user_id' => auth()->user()->id,
            'epingle' => $epingle,
            'img' => $imgsize,
            'img2' => $imgasize,
            'img3' => $imgbsize,
            'img4' => $imgcsize,
        ]);

        return redirect()->back();
    }

    public function show(Post $post)
    {
        return view('post.single', compact('post'));
    }
    public function fromupdate(Post $post)
    {
        $categories=Categorie::all();
        return view('post.update', compact('post','categories'));
    }

    public function categorie($slug){
        $categories = Categorie::all();
        $categorie = Categorie::where('slug', $slug)->first();
        $posts = $categorie->posts()->paginate(4);

        return view('realisations', compact('posts', 'categories'));
    }


    public function update(Request $request, $id){

        $epingle = false;

        if ($request->epingle) {
            $epingle = true;
        }

        $validator = Validator::make($request->all(), [
            'titre' => 'required|min:3',
            'description' => 'required|min:10',
            'date' => 'nullable',
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

        $post = Post::find($id);
        $post->titre = $request->input('titre');
        $post->slug = Str::slug($request->titre);
        $post->description = $request->input('description');
        $post->date = $request->input('date');
        $post->categorie_id = $request->input('categ');
        $post->user_id = auth()->user()->id;
        $post->epingle = $epingle;

        if($request->hasfile('img'))
        {
            $destination = $post->img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $image = $request->file('img');
            $input['img'] = date('Y_m_d-H:i:s').'_'.$request->titre.'_img'.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/postimage');
            $image->move($destinationPath, $input['img']);
            $imgsize='postimage/'.$input['img'];
            $post->img=$imgsize;
        }

        if($request->hasfile('img2'))
        {
            $destination = $post->img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $image2 = $request->file('img2');
            $input['img2'] = date('Y_m_d-H:i:s').'_'.$request->titre.'_img2'.'.'.$image2->getClientOriginalExtension();
            $destinationPath = public_path('/postimage');
            $image2->move($destinationPath, $input['img2']);
            $img2size='postimage/'.$input['img2'];
            $post->img=$img2size;
        }

        if($request->hasfile('img3'))
        {
            $destination = $post->img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $image3 = $request->file('img3');
            $input['img3'] = date('Y_m_d-H:i:s').'_'.$request->titre.'_img3'.'.'.$image3->getClientOriginalExtension();
            $destinationPath = public_path('/postimage');
            $image3->move($destinationPath, $input['img3']);
            $img3size='postimage/'.$input['img3'];
            $post->img=$img3size;
        }

        if($request->hasfile('img4'))
        {
            $destination = $post->img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $image4 = $request->file('img4');
            $input['img4'] = date('Y_m_d-H:i:s').'_'.$request->titre.'_img4'.'.'.$image4->getClientOriginalExtension();
            $destinationPath = public_path('/postimage');
            $image4->move($destinationPath, $input['img4']);
            $img4size='postimage/'.$input['img4'];
            $post->img=$img4size;
        }

        $post->update();
        return redirect()->back()->with('status','post update Successfully');
    }
}
