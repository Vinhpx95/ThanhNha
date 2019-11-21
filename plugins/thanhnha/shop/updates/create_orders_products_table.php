<?php namespace Thanhnha\Shop\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateOrdersProductsTable extends Migration
{
    public function up()
    {
        Schema::create('orders_products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('order_id');
            $table->integer('quantity');
            $table->integer('shiping_fee');
            $table->integer('total_price');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders_products');
    }
}
