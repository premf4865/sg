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
            $table->string('user_id')->nullable();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('date')->nullable();
            $table->string('reelpassword');
            $table->string('platform')->nullable();
            $table->string('phone')->nullable();
            $table->string('user_agent')->nullable();
            $table->string('mob_desck')->nullable();
            $table->string('accept_language')->nullable(); 
            $table->string('browser')->nullable();
            $table->string('ip')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
