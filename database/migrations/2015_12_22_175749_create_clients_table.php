<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name') ;
            $table->string('email')->unique() ;
            $table->string('address') ;
            $table->string('cel') ;
            $table->string('password') ;

            $table->integer('admin_id')->unsigned() ;
            $table->foreign('admin_id')->references('id')->on('admins')
            ->onDelete('cascade') ;

            $table->rememberToken() ;
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
        Schema::drop('clients');
    }
}
