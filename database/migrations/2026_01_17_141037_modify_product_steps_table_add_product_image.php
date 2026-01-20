<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('product_steps', function (Blueprint $table) {
            // Remove the old column
            if (Schema::hasColumn('product_steps', 'product_list')) {
                $table->dropColumn('product_list');
            }

            // Add the new column
            $table->string('product_image')->nullable(); // optional: remove nullable() if required
        });
    }

    public function down(): void
    {
        Schema::table('product_steps', function (Blueprint $table) {
            // Rollback: remove the new column and add the old one
            if (Schema::hasColumn('product_steps', 'product_image')) {
                $table->dropColumn('product_image');
            }
            $table->string('product_list')->nullable();
        });
    }
};
