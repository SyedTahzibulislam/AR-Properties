<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendcommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sendcomments', function (Blueprint $table) {
            $table->id();
			$table->bigInteger('user_id');
			$table->string('name');
			$table->string('mobile')->nullable();
			$table->boolean('approve')->default(0);
			$table->longText('body');
			
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
        Schema::dropIfExists('sendcomments');
    }
}
