<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothes;
use App\Models\User;
use App\Models\UserClothes;
use Illuminate\Support\Facades\Auth;

class UserClothesController extends Controller
{
    public function index()
    {
        $clothes = Clothes::where('user_id', Auth::id())->get();; // データベースから全データを取得
        return view('clothes_select', compact('clothes'));
    }
}
