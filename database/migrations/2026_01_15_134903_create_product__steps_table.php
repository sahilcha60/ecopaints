<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('product_steps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')
                  ->constrained('products')
                  ->cascadeOnDelete();
            $table->string('title');
            $table->unsignedInteger('step');
            $table->string('product_list')->nullable();
            $table->unsignedInteger('coat')->nullable();
            $table->timestamps();

            // Optional: prevent duplicate step numbers per product
            $table->unique(['product_id', 'step']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_steps');
    }
};
