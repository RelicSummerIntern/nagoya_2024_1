<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserClothes;

class UploadController extends Controller
{
    // 画像をアップロードして保存するメソッド
    public function upload(Request $request)
    {
        // バリデーション
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // 画像がアップロードされているか確認
        if ($request->hasFile('image')) {
            // 画像を取得
            $image = $request->file('image');
            // ファイル名を生成
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            // 保存するパスを指定
            $destinationPath = public_path('/img');
            // 画像を保存
            $image->move($destinationPath, $fileName);

                // データベースに保存
            UserClothes::create([
                'user_id' => auth()->id(), // 認証済みのユーザーIDを取得
                'picture' => '/img/' . $fileName,
            ]);

            return back()->with('success', 'Image uploaded successfully');
        }

        return back()->with('error', 'No image selected');
    }
}