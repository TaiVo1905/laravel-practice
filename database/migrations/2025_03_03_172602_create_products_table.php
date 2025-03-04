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
            $table->id();
            $table->primary('id');
            $table->string('name', 100)->default(null);
            $table->foreignId('id_type');
            $table->text('description')->default(null);
            $table->float('unit_price')->default(null);
            $table->float('promotion_price')->default(null);
            $table->string('image')->default(null);
            $table->string('unit')->default(null);
            $table->tinyInteger('new')->default(0);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        });
        DB::statement('ALTER TABLE products AUTO_INCREMENT = 87');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
