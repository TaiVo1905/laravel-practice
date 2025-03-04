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
        Schema::create('revisions', function (Blueprint $table) {
            $table->increments()->unsigned();
            $table->primary('id');
            $table->string('revisionable_type');
            $table->integer('revisionable_id');
            $table->integer('user_id')->default(null);
            $table->string('key');
            $table->text('old_value')->default(null);
            $table->text('new_value')->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        })->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
        DB::statement('ALTER TABLE wishlists AUTO_INCREMENT = 10');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revisions');
    }
};
