<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        
        return Post::all();
    }

    public function show()
    {
        //
    }

    
    public function store(Request $request)
    {
        
        $data=Post::create($request->all());
        return $data;
    }

    public function update(Request $request, Post $post)
    {
        $data=$request->all();
        $post->fill($data);
        $post->save();

    }

    public function destroy(string $id)
    {
        Post::destroy($id);
    }

    public function posts_author(){
        $posts=Post::with('author')->get();
        return response()->json($posts);
    }
}
