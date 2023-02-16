<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
			$table->string('mobile')->nullable();
			$table->string ('email')->nullable();
			$table->string ('facebook')->nullable();
			$table->string ('youtube')->nullable();
			$table->string('instragram')->nullable();
			$table->string('latitude')->nullable();
			$table->string('longitude')->nullable();
			$table->text('map')->nullable();
			$table->text('address')->nullable();
			$table->string('whatsappnumber')->nullable();
			$table->text('whatsapptext')->nullable();
			
		
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
        Schema::dropIfExists('contacts');
    }
}
