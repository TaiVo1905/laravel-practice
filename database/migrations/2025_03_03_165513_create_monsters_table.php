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
            $table->increments()->unsigned();
            $table->string('address')->default(null);
            $table->string('browse')->default(null);
            $table->boolean('checkbox')->default(null);
            $table->text('wysiwyg')->default(null);
            $table->string('color')->default(null);
            $table->string('color_picker')->default(null);
            $table->date('date')->default(null);
            $table->date('date_picker')->default(null);
            $table->date('start_date')->default(null);
            $table->date('end_date')->default(null);
            $table->dateTime('datetime')->default(null);
            $table->dateTime('datetime_picker')->default(null);
            $table->string('email', 255)->default(null);
            $table->integer('hidden')->default(null);
            $table->string('icon_picker', 255)->default(null);
            $table->string('image', 255)->default(null);;
            $table->string('month', 255)->default(null);;
            $table->integer('number')->default(null);
            $table->double('float', 8, 2)->default(null);
            $table->string('password', 255)->default(null);
            $table->string('radio', 255)->default(null);
            $table->string('range', 255)->default(null);
            $table->integer('select')->default(null);
            $table->string('select_from_array', 255)->default(null);
            $table->integer('select2')->default(null);
            $table->integer('select2_from_ajax')->default(null);
            $table->string('select2_from_array', 255)->default(null);
            $table->text('simplemde')->default(null);
            $table->text('summernote')->default(null);
            $table->text('table')->default(null);
            $table->text('textarea')->default(null);
            $table->string('text', 255)->default(null);
            $table->text('tinymce')->default(null);
            $table->string('upload', 255)->default(null);
            $table->string('upload_multiple', 255)->default(null);
            $table->string('url', 255)->default(null);
            $table->text('video')->default(null);
            $table->string('week', 255)->default(null);
            $table->text('extras')->default(null);
            $table->timestamps('created_at')->nullable()->default(null);
            $table->timestamps('updated_at')->nullable()->default(null);
            $table->mediumBlob('base64_image')->default(null);
        })->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monsters');
    }
};
