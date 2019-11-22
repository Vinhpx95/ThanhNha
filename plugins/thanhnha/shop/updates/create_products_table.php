<?php namespace Thanhnha\Shop\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('product_code');
            $table->string('name');
            $table->integer('invest_price');
            $table->integer('wholesale_price');
            $table->integer('retail_price');
            $table->integer('quantity');
            $table->text('note')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
