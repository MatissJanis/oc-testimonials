<?php namespace Mja\Testimonials\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddTestimonialDateColumn extends Migration
{

    public function up()
    {
        Schema::table('mja_testimonials_testimonials', function ($table) {
            $table->date('date')->nullable();
        });
    }

    public function down()
    {
        Schema::table('mja_testimonials_testimonials', function ($table) {
            $table->dropColumn('date');
        });
    }

}
