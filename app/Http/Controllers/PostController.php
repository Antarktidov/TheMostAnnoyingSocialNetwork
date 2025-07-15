<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'filename' => 'required|file|mimes:mp3,wav,ogg,flac,aac,m4a,amr,opus,webm',
        ]);

        $data = [
            'filename' => $request->filename,
            'user_id' => auth()->user()->id,
        ];
        
        // Сохраняем загруженный файл в хранилище и сохраняем путь в $data['filename']
        if ($request->hasFile('filename')) {
            $path = $request->file('filename')->store('uploads', 'public');
            $data['filename'] = $path;
        }

        $post = Post::create($data);

        return redirect()->route('posts.index');
    }

    public function addReaction(Request $request, Post $post)
    {
        $request->validate([
            'reaction_type' => 'required|string',
        ]);

        $reactionType = $request->reaction_type . 'Count';
        $reactionCount = $post->$reactionType;
        $reactionCount++;

        $post->update([
            $reactionType => $reactionCount,
        ]);

        return response()->json([
            'reactionCount' => $reactionCount,
            'reactionType' => $reactionType,
        ]);
    }
}
