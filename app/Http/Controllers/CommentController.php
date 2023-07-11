<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $id)
    {
        $post = Post::findOrFail($id);
    
        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->post()->associate($post);
        $comment->save();
    
        return redirect()->back();
    }
    
}
