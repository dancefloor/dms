<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');            
            $table->decimal('subtotal')->nullable();
            $table->decimal('vat')->nullable();
            $table->decimal('discount')->nullable();
            $table->string('discount_code')->nullable();
            $table->decimal('total')->nullable();
            $table->text('comments')->nullable();
            $table->string('method')->nullable();
            $table->enum('status',['open','canceled', 'paid', 'expired', 'partial'])->nullable();
            $table->foreignId('author_id')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
