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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->primary('id');
            $table->string('title', 200)->collation('utf8_unicode_ci');
            $table->text('content')->collation('utf8_unicode_ci');
            $table->string('image', 100)->collation('utf8_unicode_ci');
            $table->timestamp('create_at')->useCurrent()->useCurrentOnUpdate();
            $table->timestamp('update_at')->default('0000-00-00 00:00:00');
        })->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
