<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothes;

class UserClothesController extends Controller
{
    public function index()
    {
        $clothes = Clothes::all(); // データベースから全データを取得
        return view('clothes_select', compact('clothes'));
    }
}
