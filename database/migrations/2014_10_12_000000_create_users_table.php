<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('profile_picture')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('rule')->nullable();
            $table->text('about')->nullable();
            $table->string('location')->nullable();
            $table->string('website')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('email_verified_hash')->nullable();
            $table->timestamp('activation_hash_created_at')->nullable();
            $table->string('password');
            $table->boolean('two_factory')->default(0);
            $table->boolean('notification')->default(0);
            $table->float('balance')->default(0);
            $table->boolean('is_google')->default(0);
            $table->boolean('is_verify')->default(0);
            $table->string('invite_code');
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
