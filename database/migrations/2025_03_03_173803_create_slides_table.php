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
        Schema::create('slides', function (Blueprint $table) {
            $table->increments()->unsigned();
            $table->primary('id');
            $table->string('link', 100);
            $table->string('image', 100);
            $table->timestamps();
        })->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
        DB::statement('ALTER TABLE wishlists AUTO_INCREMENT = 5');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slides');
    }
};
