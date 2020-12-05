<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('outlet_id');
            $table->foreignId('category_id');
            $table->string('product_code', 255);
            $table->string('name', 255);
            $table->string('avatar', 255)->nullable();
            $table->integer('availability');
            $table->integer('price');
            $table->date('expired_date')->nullable();
            $table->integer('qty_balance');
            $table->integer('qty_total');
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
        Schema::dropIfExists('products');
    }
}
