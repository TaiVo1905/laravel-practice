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
        Schema::create('migrations', function (Blueprint $table) {
            $$table->increments()->unsigned();
            $table->primary('id');
            $table->string('migration', 191);
            $table->integer('batch');
            $table->timestamps();
        })->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
        DB::statement('ALTER TABLE wishlists AUTO_INCREMENT = 48');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('migrations');
    }
};
