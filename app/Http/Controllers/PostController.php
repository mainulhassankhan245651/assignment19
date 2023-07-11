<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller

{
public function page(Request $request){
    return view('pages.projects');
}

function projectsData(Request $request){
    return $posts = Post::all();
}

public function show($id)
{
    $post = Post::findOrFail($id);
    return view('pages.postdetail', compact('post'));
}
}
