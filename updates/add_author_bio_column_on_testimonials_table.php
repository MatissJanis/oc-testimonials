<?php namespace Mja\Testimonials\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddAuthorBioColumnOnTestimonialsTable extends Migration
{

    public function up()
    {
        Schema::table('mja_testimonials_testimonials', function ($table) {
            $table->text('author_bio')->nullable();
        });
    }

    public function down()
    {
        Schema::table('mja_testimonials_testimonials', function ($table) {
            $table->dropColumn('author_bio');
        });
    }

}
