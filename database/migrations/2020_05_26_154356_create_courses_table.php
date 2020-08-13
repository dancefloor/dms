<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();            
            $table->text('excerpt')->nullable();            
            $table->string('tagline')->nullable();  
            
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            
            $table->boolean('monday')->nullable();            
            $table->time('start_time_mon')->nullable();
            $table->time('end_time_mon')->nullable();

            $table->boolean('tuesday')->nullable();                        
            $table->time('start_time_tue')->nullable();
            $table->time('end_time_tue')->nullable();

            $table->boolean('wednesday')->nullable();                        
            $table->time('start_time_wed')->nullable();
            $table->time('end_time_wed')->nullable();

            $table->boolean('thursday')->nullable();            
            $table->time('start_time_thu')->nullable();
            $table->time('end_time_thu')->nullable();

            $table->boolean('friday')->nullable();                        
            $table->time('start_time_fri')->nullable();
            $table->time('end_time_fri')->nullable();

            $table->boolean('saturday')->nullable();                        
            $table->time('start_time_sat')->nullable();
            $table->time('end_time_sat')->nullable();

            $table->boolean('sunday')->nullable();                        
            $table->time('start_time_sun')->nullable();
            $table->time('end_time_sun')->nullable();
            
            $table->string('level')->nullable();
            $table->integer('level_number')->nullable();

            $table->text('teaser_video_1')->nullable();
            $table->text('teaser_video_2')->nullable();
            $table->text('teaser_video_3')->nullable();

            $table->decimal('full_price')->nullable();
            $table->decimal('reduced_price')->nullable();
            $table->decimal('promo_price')->nullable();
                        
            $table->string('thumbnail')->nullable();                    
            
            $table->set('focus',['partnerwork','footwork','choreography', 'styling', 'body movements', 'theory']);
            $table->enum('type',['bootcamp','class', 'workshop', 'online'])->nullable(); 
            $table->enum('status',['active','finished','soon'])->nullable();
            
            $table->string('online_link')->nullable(); 
            $table->string('online_id')->nullable(); 
            $table->string('online_password')->nullable();

            $table->integer('limit')->nullable();
            
            $table->unsignedBigInteger('user_id');
            $table->bigInteger('location_id')->nullable();
            
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
        Schema::drop('courses');
    }
}
