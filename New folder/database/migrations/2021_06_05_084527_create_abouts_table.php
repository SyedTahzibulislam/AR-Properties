<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
			$table->string ('service_name')->nullable();
			$table->text ('description_1st')->nullable();
			$table->text ('description_2nd')->nullable();
			$table->text ('description_3rd')->nullable();
			$table->text ('description_4th')->nullable();
			$table->text ('description_5th')->nullable();
			$table->string('image')->nullable();
			$table->text('slogan_1')->nullable();
			$table->text('slogan_2')->nullable();
			$table->text('starting_date')->nullable();
			
			
						$table->string ('bnservice_name')->nullable();
			$table->text ('bndescription_1st')->nullable();
			$table->text ('bndescription_2nd')->nullable();
			$table->text ('bndescription_3rd')->nullable();
			$table->text ('bndescription_4th')->nullable();
			$table->text ('bndescription_5th')->nullable();
			
			$table->text('bnslogan_1')->nullable();
			$table->text('bnslogan_2')->nullable();
			$table->text('bnstarting_date')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
