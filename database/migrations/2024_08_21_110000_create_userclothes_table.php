<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserClothesTable extends Migration
{
    public function up()
    {
        Schema::create('user_clothes', function (Blueprint $table) {
            $table->id(); // 'id' カラム
            $table->string('picture', 255); // 'picture' カラム
            $table->timestamps(); // 'created_at' と 'updated_at' カラム
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_clothes');
    }
}
