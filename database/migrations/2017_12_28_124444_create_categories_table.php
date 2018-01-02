<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_name');
            $table->timestamps();
        });
        DB::table('categories')->insert([
                'category_name' => 'Birthday',
            ]
        );
        DB::table('categories')->insert([
                'category_name' => 'Marriage',
            ]
        );
        DB::table('categories')->insert([
                'category_name' => 'Meeting',
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
        Schema::dropIfExists('categories');
    }
}
