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
        Schema::create('menu_items', function (Blueprint $table) {
            $table->increments()->unsigned();
            $table->primary('id');
            $table->string('name', 100);
            $table->string('type', 20)->default(null);
            $table->string('link')->default(null);
            $table->foreignId('page_id')->default(null);
            $table->foreignId('parent_id')->default(null);
            $table->unsignedInteger('lft')->default(null);
            $table->unsignedInteger('rgt')->default(null);
            $table->unsignedInteger('depth')->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->timestamps();
        })->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
        DB::statement('ALTER TABLE wishlists AUTO_INCREMENT = 8');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_items');
    }
};
