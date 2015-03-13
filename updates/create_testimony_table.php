<?php namespace Mja\Testimonies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTestimonyTable extends Migration
{

    public function up()
    {
        Schema::create('mja_testimonies', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('content');
            $table->string('author')->nullable();
            $table->boolean('is_public')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mja_testimonies');
    }

}
