<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); 
            $table->string('title', 255); 
            $table->text('body'); 
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('author_id')->constrained('authors') ->onDelete('cascade'); 
            $table->string('featured_image', 255); 
            $table->dateTime('read_time');
            $table->timestamp('published_at')->nullable(); 
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0); 
            $table->timestamps(); 
        });
    }

    public function down()  
    {
        Schema::dropIfExists('articles');
    }
}
