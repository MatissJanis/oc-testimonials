<?php namespace Mja\Testimonials\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateTestimonialTable extends Migration
{

    public function up()
    {
        Schema::create('mja_testimonials_testimonials', function ($table) {
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
        Schema::dropIfExists('mja_testimonials_testimonials');
    }

}
