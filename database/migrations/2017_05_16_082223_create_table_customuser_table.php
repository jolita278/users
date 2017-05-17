<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCustomuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_user', function (Blueprint $table) {
            $table->increments('count');
            $table->string('id', 36)->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('firstName');
            $table->string('surname');
            $table->string('phone',8);
            $table->string('fbUrl')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custom_user');

    }
}
