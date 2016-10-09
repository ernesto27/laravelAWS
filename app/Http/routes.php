<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    $posts = \App\Post::all();
    return view('posts.index' , compact('posts'));
});

Route::post('post/create', function(Request $request){
    // Todo validate image file - and input

    $destinationPath = base_path(). '/public/images';
    $fileName = $request->file('image')->getClientOriginalName();

    if($request->file("image")->move($destinationPath, $fileName)){
        $post = new \App\Post;
        $post->title = $request->get('title');
        $post->image_path = 'images' . $fileName;
        $post->votes = 0;
        $post->user_id = 1;
        $post->save();
    }
});
