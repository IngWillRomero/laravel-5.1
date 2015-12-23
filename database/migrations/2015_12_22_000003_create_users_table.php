<?php

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
            $table->string('photo') ;
            $table->string('name');
            $table->string('email')->unique();
            $table->string('address') ;
            $table->string('cel') ;
            $table->string('password', 60);

            $table->integer('admin_id')->unsigned() ;
            $table->integer('municipality_id')->unsigned() ;

            $table->foreign('admin_id')->references('id')->on('admins')
            ->onDelete('cascade') ;

            $table->foreign('municipality_id')->references('id')->on('municipalities')
            ->onDelete('cascade') ;

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('user_municipality',function(Blueprint $table){
          $table->increments('id') ;

          $table->integer('user_id')->unsigned() ;
          $table->integer('municipality_id')->unsigned() ;

          $table->foreign('user_id')->references('id')->on('users')
          ->onDelete('cascade') ;
          $table->foreign('municipality_id')->references('id')->on('municipalities')
          ->onDelete('cascade') ;

        }) ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
