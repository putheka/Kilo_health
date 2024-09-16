<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadMediaTable extends Migration
{
    public function up()
    {
        Schema::create('upload_media', function (Blueprint $table) {
            $table->id();
            $table->string('file_path');
            $table->string('mime_type');
            $table->foreignId('article_id')->constrained('articles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('upload_media');
    }
}