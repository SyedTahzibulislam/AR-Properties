<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlideshowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slideshows', function (Blueprint $table) {
            $table->id();
			$table->string ('address_line1')->nullable();
			$table->string ('address_line2')->nullable();
			$table->float('price', 80, 2)->nullable();  
			$table->string ('bnaddress_line1')->nullable();
			$table->string ('bnaddress_line2')->nullable();
			$table->string('bnprice')->nullable();
			
			
			
			
			$table->string('image');
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
        Schema::dropIfExists('slideshows');
    }
}
