<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('provider')->nullable();
            $table->string('method')->nullable();
            $table->string('amount');
            $table->string('currency')->nullable();
            $table->string('molley_payment_id')->nullable();
            $table->enum('status',['paid','partial','pending','processing','overpaid', 'failed', 'open', 'canceled', 'expired']);
            $table->timestamp('done')->nullable();
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
        Schema::drop('payments');
    }
}
