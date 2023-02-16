<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
			$table->string ('address_line1')->nullable();
			$table->string ('adress_line2')->nullable();
			$table->string ('area')->nullable();
			$table->string ('price')->nullable();
			$table-> text ('video')->nullable();
			$table->text ('map')->nullable();
			$table->text('description')->nullable();
			$table->string ('scratch')->nullable();
			$table->string ('latitude')->nullable();
			$table->string ('longitude')->nullable();
			
		
			
			$table->string ('bnaddress_line1')->nullable();
			$table->string ('bnadress_line2')->nullable();
			$table->string ('bnarea')->nullable();
			$table->string ('bnprice')->nullable();
		
			$table->text('bndescription')->nullable();
			
			
			
			
			
			$table->string('image')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
