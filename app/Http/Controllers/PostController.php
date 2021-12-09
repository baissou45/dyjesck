<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Validation\Validator;

class PostController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::take(5)->get();

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'titre' => 'required|min:3',
            'soustitre' => 'required|min:6',
            'contenus' => 'required|min:10',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6048',
        ]);

        if ($validator->fails()) {

            return redirect('post')
                ->withErrors($validator)
                ->withInput();
        }
        $image = $request->file('image');

        $input['image'] = time() . '.' . $image->getClientOriginalExtension();

        $destinationPath = public_path('/blogimage');

        $img = Image::make($image->getRealPath());

        $img->resize(860, 500, function ($constraint) {

            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $input['image']);


        $destinationPath = public_path('/image');

        $image->move($destinationPath, $input['image']);


        $finalimage = $this->postImage->add($input);

        Post::create([
            'titre' => $request->titre,
            'soustitre' =>  $request->soustitre,
            'contenus' => $request->contenus,
            'image' => $finalimage,
        ]);

        return redirect()->back();
    }

    public function show(Post $post)
    {
        return view('post.single', compact('post'));
    }
}
