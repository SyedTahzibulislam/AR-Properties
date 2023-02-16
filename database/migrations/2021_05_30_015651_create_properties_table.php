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
			$table->double ('price',12,2)->nullable();
			$table->double ('maxprice',12,2)->nullable();
			$table-> text ('video')->nullable();
			$table->text ('map')->nullable();
			$table->text('description')->nullable();
			$table->string ('scratch')->nullable();
			$table->string ('latitude')->nullable();
			$table->string ('longitude')->nullable();
			
		$table->string ('searchlocation')->nullable();
			
			$table->string ('bnaddress_line1')->nullable();
			$table->string ('bnadress_line2')->nullable();
			$table->string ('bnarea')->nullable();
			$table->string ('bnprice')->nullable();
			$table->string ('maxbnprice')->nullable();
		
			$table->text('bndescription')->nullable();
			
			
			
			
			
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
        Schema::dropIfExists('properties');
    }
}
