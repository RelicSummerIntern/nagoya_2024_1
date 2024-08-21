<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
    protected $table = 'user_clothes'; 
    
    protected $fillable = ['picture']; 
}
