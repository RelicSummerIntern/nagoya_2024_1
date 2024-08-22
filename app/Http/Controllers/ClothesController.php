<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserClothes;

class ClothesController extends Controller
{
    public function deleteImage($id)
        {
            // ID でアイテムを検索
            $item = Clothes::findOrFail($id);

            // ストレージから画像ファイルを削除
            if (Storage::exists($item->picture)) {
                Storage::delete($item->picture);
            }

            // データベースから画像パスを削除
            $item = null;
            $item->save();

            // 成功メッセージと共にリダイレクト
            return redirect()->back()->with('status', '画像が削除されました。');
        }
}