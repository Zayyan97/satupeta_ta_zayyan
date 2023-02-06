<?php namespace Zayn\Genetics\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZaynGeneticsInfo extends Migration
{
    public function up()
{
    Schema::create('zayn_genetics_info', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('judul', 255);
        $table->text('konten');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('zayn_genetics_info');
}
}
