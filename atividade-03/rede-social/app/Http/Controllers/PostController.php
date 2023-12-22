<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::withCount('likes', 'comments')->get();
        return response()->json($posts, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'corpo' => 'required',
        ]);

        $post = Post::create($request->all());

        return response()->json($post, 201);
    }

    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        $post->load('likes', 'comments');
        $post->likes_count = $post->countLikes();
        $post->comments_count = $post->countComments();

        return response()->json($post, 200);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'titulo' => 'required',
            'corpo' => 'required',
        ]);

        $post = Post::findOrFail($id);
        $post->update($request->all());

        return response()->json($post, 200);
    }

    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return response()->json(null, 204);
    }
}
