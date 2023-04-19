<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_category', function (Blueprint $table) {
          $table->unsignedBiginteger('catalog_id');
          $table->unsignedBiginteger('category_id');

          $table->foreign('catalog_id')->references('id')->on('catalogs')->onDelete('cascade');
          $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog_category');
    }
};
