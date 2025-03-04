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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->primary('id');
            $table->foreignId('id_customer')->nullable()->default(null);
            $table->date('date_order');
            $table->float('total', 8, 2);
            $table->string('payment', 200)->nullable()->default(null);
            $table->text('note');
            $table->timestamp('created_at')->nullable()->useCurrent()->useCurrentOnUpdate();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
        DB::statement('ALTER TABLE bills AUTO_INCREMENT = 60');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
