<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('role', ['admin', 'host', 'user']);
            $table->boolean('validated');
            $table->string('name');
            $table->string('username', 20)->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('institute', 100);
            $table->string('address', 255);
            $table->string('phone', 15);
            $table->dateTime('start_working_date');
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
        Schema::dropIfExists('users');
    }
}
