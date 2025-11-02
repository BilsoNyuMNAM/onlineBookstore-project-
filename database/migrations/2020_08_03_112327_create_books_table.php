<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->nullable(false);
            $table->json('category')->nullable(false);
            $table->decimal('price', 6,2)->nullable(false);
            $table->string('author')->nullable(false);
           $table->year('publish_year');
            $table->smallInteger('stock');
            $table->string('cover_image', 256)->nullable();
            $table->string('slug', 100)->unique()->nullable(false);
            $table->text('description')->nullable(); // <-- Add this line
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}