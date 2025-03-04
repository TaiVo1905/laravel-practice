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
        Schema::create('a_s', function (Blueprint $table) {
            $table->increments()->unsigned();
            $table->primary('id');
            $table->foreignId('b_s_id')->references('id')->on('b_s')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        })->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('a_s');
    }
};
