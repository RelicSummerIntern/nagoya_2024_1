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
            $table->unsignedBigInteger('user_id');
            $table->string('picture', 255); // 'picture' カラム
            $table->timestamps(); // 'created_at' と 'updated_at' カラム

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_clothes');
    }
}
