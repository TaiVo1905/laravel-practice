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
        Schema::create('model_has_permissions', function (Blueprint $table) {
            $table->foreignId('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->string('model_type');
            $table->foreignId('model_id');
            $table->timestamps();
            $table->primary('permission_id', 'model_id', 'model_type');
        })->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_has_permissions');
    }
};
