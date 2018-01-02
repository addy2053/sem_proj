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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique;
            $table->string('password');
            $table->string('contact');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert([
                'name' => 'Umar',
                'email' => 'cute.devil63@hotmail.com',
                'password' => '$2y$10$A04VXfXEf34tp4db0Lba1ekuDjfmn6UKb0WmRFbfwZE6FfVNhxDpW',  //password for admin
                'contact' => '03227547980',

            ]
        );

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
