<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('product_steps', function (Blueprint $table) {
            // Remove the product_image column if it exists
            if (Schema::hasColumn('product_steps', 'product_image')) {
                $table->dropColumn('product_image');
            }

            // Add product_list column back
            $table->string('product_list')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('product_steps', function (Blueprint $table) {
            // Rollback: remove product_list and add product_image again
            if (Schema::hasColumn('product_steps', 'product_list')) {
                $table->dropColumn('product_list');
            }

            $table->string('product_image')->nullable();
        });
    }
};
