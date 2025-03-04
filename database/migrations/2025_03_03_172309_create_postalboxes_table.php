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
        Schema::create('postalboxes', function (Blueprint $table) {
            $table->increments()->unsigned();
            $table->primary('id');
            $table->string('postal_name')->default(null);
            $table->foreignId('monster_id');
            $table->timestamps();
        })->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postalboxes');
    }
};
