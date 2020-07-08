<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logon', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('engineer');
            $table->string('tetramodel');
            $table->string('memsize');
            $table->string('sernum');
            $table->string('bchnum');
            $table->string('qty');
            $table->string('comments');
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
        Schema::dropIfExists('logon');
    }
}
