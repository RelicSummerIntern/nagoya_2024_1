<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreClothes extends Model
{
    use HasFactory;

    protected $fillable = ['picture', 'store_id', 'category_id'];
}
