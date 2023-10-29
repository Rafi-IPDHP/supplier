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
        Schema::create('exit_products', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            // $table->integer('price');
            $table->integer('quantity');
            $table->date('tanggal');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            // $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exit_products');
    }
};
