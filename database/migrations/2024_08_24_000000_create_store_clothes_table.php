<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreClothesTable extends Migration
{
    public function up()
    {
        Schema::create('store_clothes', function (Blueprint $table) {
            $table->id();
            $table->string('picture', 255);
            $table->BigInteger('store_id');
            $table->BigInteger('category_id');
        
        });
    }

    public function down()
    {
        Schema::dropIfExists('store_clothes');
    }
}