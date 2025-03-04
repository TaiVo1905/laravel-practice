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
        Schema::create('monsters', function (Blueprint $table) {
            $table->id();
            $table->string('address')->nullable();
            $table->string('browse')->nullable();
            $table->boolean('checkbox')->nullable();
            $table->text('wysiwyg')->nullable();
            $table->string('color')->nullable();
            $table->string('color_picker')->nullable();
            $table->date('date')->nullable();
            $table->date('date_picker')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->dateTime('datetime_picker')->nullable();
            $table->string('email', 255)->nullable();
            $table->integer('hidden')->nullable();
            $table->string('icon_picker', 255)->nullable();
            $table->string('image', 255)->nullable();
            $table->string('month', 255)->nullable();
            $table->integer('number')->nullable();
            $table->double('float', 8, 2)->nullable();
            $table->string('password', 255)->nullable();
            $table->string('radio', 255)->nullable();
            $table->string('range', 255)->nullable();
            $table->integer('select')->nullable();
            $table->string('select_from_array', 255)->nullable();
            $table->integer('select2')->nullable();
            $table->integer('select2_from_ajax')->nullable();
            $table->string('select2_from_array', 255)->nullable();
            $table->text('simplemde')->nullable();
            $table->text('summernote')->nullable();
            $table->text('table')->nullable();
            $table->text('textarea')->nullable();
            $table->string('text', 255)->nullable();
            $table->text('tinymce')->nullable();
            $table->string('upload', 255)->nullable();
            $table->string('upload_multiple', 255)->nullable();
            $table->string('url', 255)->nullable();
            $table->text('video')->nullable();
            $table->string('week', 255)->nullable();
            $table->text('extras')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->binary('base64_image')->nullable();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monsters');
    }
};
