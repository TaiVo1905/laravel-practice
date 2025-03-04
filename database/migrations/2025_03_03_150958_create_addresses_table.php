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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('street')->nullable()->default(null);
            $table->string('country');
            $table->foreignId('icon_id')->nullable()->default(null);
            $table->foreignId('monster_id')->unique();
            $table->primary('id');
        })->collation('utf8mb4_unicode_ci')->charset('utf8mb4');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
