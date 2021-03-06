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
        Schema::create('category_has_subcategories', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained();
            $table->foreignId('subcategory_id')->constrained();

            // $table->integer('category_id')->unsigned();
            // $table->integer('subcategory_id')->unsigned();
            // $table->foreign('category_id')
            //     ->references('id')
            //     ->on('categories');
            // $table->foreign('subcategory_id')
            //     ->references('id')
            //     ->on('subcategories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_has_subcategories');
    }
};
