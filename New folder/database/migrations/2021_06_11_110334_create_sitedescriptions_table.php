<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitedescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitedescriptions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
			$table->text('metanmae')->nullable();
			$table->text('siteicontitle')->nullable();
			$table->text('metadescription')->nullable();
			$table->string('favicon')->nullable();
			$table->string('appletouchicon')->nullable();
			$table->string('fristnametite')->nullable();
			$table->string('lastnametite')->nullable();
			
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sitedescriptions');
    }
}
