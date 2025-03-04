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
        Schema::create('products', function (Blueprint $table) {
            $table->increments()->unsigned();
            $table->primary('id');
            $table->string('name', 100)->default(null);
            $table->foreignId('id_type')->default(null)->references('id')->on('id_type');
            $table->text('description')->default(null);
            $table->float('unit_price')->default(null);
            $table->float('promotion_price')->default(null);
            $table->string('image')->default(null);
            $table->string('unit')->default(null);
            $table->tinyInteger('new')->default(0);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        })->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
        DB::statement('ALTER TABLE wishlists AUTO_INCREMENT = 87');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
