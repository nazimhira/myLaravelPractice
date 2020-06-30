<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function create()
    {
    	return view('posts.create');
    }

    public function store(){

    	$data = request()->validate([
    		// 'another' => '',
    		'caption' => 'required',
    		'image' => ['required','image'],

    	]);

        $imagePath = request('image')->store('uploads', 'public');

        $thumbPath = request('image')->store('uploads/thumb', 'public');

        /** @var TYPE_NAME $image */
        $thumb = Image::make(public_path("storage/{$thumbPath}"))->fit(1200, 1200);
        $thumb->save();

    	auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
            'image' => $thumbPath,
        ]);

    	return redirect('/profile/' . auth()->user()->id);
    }

    public function show(\App\Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
