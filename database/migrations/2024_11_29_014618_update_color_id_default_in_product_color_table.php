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
        Schema::table('product_colors', function (Blueprint $table) {
            $table->foreignId('color_id')
            ->nullable()
            ->default(null)
            ->change(); 
    });
      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_color', function (Blueprint $table) {
            //
        });
    }
};
