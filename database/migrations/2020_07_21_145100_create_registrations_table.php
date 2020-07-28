<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {        
                $table->id();
                $table->enum('status', ['waiting', 'pre-registered', 'registered', 'canceled', 'standby', 'open', 'partial'])->default('pre-registered'); // waiting=waiting list, pending=waiting for money to be transfered, standby=payments are paused, waiting for admin validation'
                $table->enum('role',['instructor','assistant','student']);
                $table->foreignId('course_id')->constrained()->onDelete('cascade');
                $table->foreignId('user_id')->constrained()->onDelete('cascade');            
                $table->foreignId('order_id')->nullable()->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('registrations');
    }
}
