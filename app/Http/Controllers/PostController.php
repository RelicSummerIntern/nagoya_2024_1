<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\StoreClothes;
use App\Models\UserClothes;

class PostController extends Controller
{

    public function handleDecision(Request $request)
    {
        $selectedClothesJson = $request->input('selected_clothes');
        $user = User::where('id', Auth::id())->first();
        
        // $selectedClothesJsonを使って処理を行います
        // 例えば、データベースに保存したり、ビューに渡したりします
        $selectedClothes = json_decode($selectedClothesJson);

        // 選択されたアイテムのIDを使って、次のページにリダイレクトすることもできます
        return view('recommend', compact('selectedClothes', 'user'));
    }


    public function title() {
        return view('post.title');
    }
    public function select() {
        return view('post.select');
    }
    public function decision() {
        return view('post.decision');
    }
    public function recommend() {
        return view('post.recommend');
    }

    public function chat() {
        // クエリパラメータからselectedClothesを取得する
        $storeClothesId = request('storeClothes');
        $storeClothes = StoreClothes::find($storeClothesId);

        return view('chat', compact('storeClothes'));
    }

    public function chat_banana() {
        return view('chat_banana');
    }

    public function chat_mikan() {
        return view('chat_mikan');
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

    public function upload()
    {
        return view('upload');
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


    public function background()
    {
        $posts = Post::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->get();
        return view('background', compact('posts'));
    }

    // public function payment()
    // {
    //     // クエリパラメータからselectedClothesを取得する
    //     $storeClothesId = request('storeClothes');
    //     $storeClothes = StoreClothes::find($storeClothesId);
    //     return view('payment', compact('storeClothes'));
    // }

    public function payment() {
        // クエリパラメータからselectedClothesを取得する
        $storeClothesId = request('storeClothes');
        $storeClothes = StoreClothes::find($storeClothesId);

        return view('payment', compact('storeClothes'));
    }

    public function point()
    {
        return view('point');
    }

    public function map()
    {
        return view('map');
    }

    public function qr()
    {
        return view('qrcode');
    }
    public function stores()
    {
        return view('stores');
    }

}

