<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function handleDecision(Request $request)
    {
        $selectedClothesId = $request->input('selected_clothes');
        
        // $selectedClothesIdを使って処理を行います
        // 例えば、データベースに保存したり、ビューに渡したりします

        // 選択されたアイテムのIDを使って、次のページにリダイレクトすることもできます
        return view('clothes', compact('selectedClothesId'));
    }

    public function index()
    {
        $posts = Post::orderBy('updated_at', 'desc')->get();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $post = new Post();
        $post->title = $validatedData['title'];
        $post->body = $validatedData['body'];
        $post->user_id = Auth::id();
        $post->save();

        return redirect()->route('post.index')->with('success', '投稿が作成されました');
    }

    public function myPosts()
    {
        $posts = Post::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->get();
        return view('my-posts', compact('posts'));
    }

    public function test()
    {
        return view('test2');
    }

    public function clothes()
    {
        $posts = Post::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->get();
        return view('clothes', compact('posts'));
    }

    // public function decision(Request $request)
    // {
    //     $option = $request->input('option');
    //     return view('clothes');
    // }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $post = Post::findOrFail($id);
        $post->title = $validatedData['title'];
        $post->body = $validatedData['body'];
        $post->save();

        return redirect()->route('myposts')->with('success', '投稿が更新されました');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('myposts')->with('success', '投稿が削除されました');
    }
}

