<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventcrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventcrations', function (Blueprint $table) {
            $table->id();
			$table->string ('title')->nullable();
			$table->text('description')->nullable();
						$table->string('image')->nullable();
				$table->string('image1')->nullable();
					$table->string('image2')->nullable();
						$table->string('image3')->nullable();
							$table->string('image4')->nullable();
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
        Schema::dropIfExists('eventcrations');
    }
}
