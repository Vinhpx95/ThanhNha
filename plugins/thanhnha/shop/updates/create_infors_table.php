<?php namespace Thanhnha\Shop\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateInforsTable extends Migration
{
    public function up()
    {
        Schema::create('infors', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('address');
            $table->string('opening_hours');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('mail');
            $table->string('facebook');
            $table->string('google_plus');
            //$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('infors');
    }
}
