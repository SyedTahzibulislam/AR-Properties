<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messagesends', function (Blueprint $table) {
            $table->id();
			$table->string('name')->nullable();
			$table->text('body')->nullable();
			$table->string('mobile')->nullable();
			$table->text('title')->nullable();
			$table->boolean('mark')->default(0);
			
			
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
        Schema::dropIfExists('messagesends');
    }
}
