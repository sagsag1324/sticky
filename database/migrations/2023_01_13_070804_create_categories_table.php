<?php

use Database\Seeders\CategoriesSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });
        
        Schema::create('stickers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('path');
            $table->boolean('present_in_home')->default(false);
            $table->timestamps();
        });

        Schema::create('stickers_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sticker_id');
            $table->foreign('sticker_id')->references('id')->on('stickers');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
        });

        Artisan::call('db:seed', [
            '--class' => CategoriesSeeder::class,
            '--force' => true
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stickers_categories');
        Schema::dropIfExists('stickers');
        Schema::dropIfExists('categories');
    }
}
