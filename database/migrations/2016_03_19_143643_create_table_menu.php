<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label',255);    
            $table->string('link',255);            
            $table->string('internal_url')->nullable();
            $table->string('external_url')->nullable();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->integer('level')->nullable();
            $table->integer('created_by')->unsigned()->nullable();;
            $table->integer('updated_by')->unsigned()->nullable();
            $table->string('status',1)->default('1');
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
        Schema::drop('menus');
    }
}
