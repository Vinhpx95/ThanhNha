<?php namespace Thanhnha\Shop\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateInforsTable extends Migration
{
    public function up()
    {
        Schema::create('thanhnha_shop_infors', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('thanhnha_shop_infors');
    }
}
