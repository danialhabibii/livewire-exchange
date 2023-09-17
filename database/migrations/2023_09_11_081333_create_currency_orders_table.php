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
        Schema::create('currency_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->date('time');
            $table->string('pair');
            $table->boolean('type');
            $table->string('price');
            $table->string('amount');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currency_orders');
    }
};
