<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('height')->nullable()->after('height'); 
            $table->integer('weight')->nullable()->after('weight');
            $table->rememberToken();
            $table->timestamps();
            
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->string('sex')->nullable();
            $table->string('favorite_cotegory')->nullable();  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
