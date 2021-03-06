<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable()->comment('描述');
            $table->boolean('available')->default(true)->comment('true代表能借到');
            $table->string('authors')->nullable()->comment('作者');
            $table->string('img_url')->nullable()->comment('封面图片');
            $table->string('publisher')->nullable()->comment('出版社');
            $table->string('publishDate')->nullable()->comment('出版时间');
            $table->string('e_book')->nullable()->comment('电子书的路径');
            $table->timestamp('next_available_time')->nullable()->comment('下次能借到的时间');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
