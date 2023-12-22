<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function index(Request $request, $postId)
    {
        $likes = Like::where('post_id', $postId)->get();
        return response()->json($likes, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'user_id' => 'required|exists:users,id',
        ]);
    
        $existingLike = Like::where('post_id', $request->post_id)
                            ->where('user_id', $request->user_id)
                            ->first();
    
        if ($existingLike) {
            $existingLike->delete();
            return response()->json(['message' => 'User removed their like from this post.'], 200);
        }
    
        $like = Like::create($request->all());
    
        return response()->json($like, 201);
    }

    public function destroy(string $id)
    {
        $like = Like::findOrFail($id);
        $like->delete();

        return response()->json(null, 204);
    }

    public function countLikes($postId)
    {
        $count = Like::where('post_id', $postId)->count();
        return response()->json(['count' => $count], 200);
    }
}
