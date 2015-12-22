<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuggestingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suggestings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item') ;
            $table->text('text') ;
            $table->time('time') ;

            $table->integer('client_id')->unsigned() ;
            $table->integer('user_id')->unsigned() ;

            $table->foreign('client_id')->references('id')->on('clients')
            ->onDelete('cascade') ;
            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade') ;

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
        Schema::drop('suggestings');
    }
}
