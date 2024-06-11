<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id('RegistrationID');
            $table->unsignedBigInteger('UserID');
            $table->unsignedBigInteger('EventID');
            $table->timestamps();
    
            $table->foreign('UserID')->references('UserID')->on('users')->onDelete('cascade');
            $table->foreign('EventID')->references('EventID')->on('events')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
    
};
