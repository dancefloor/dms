<?php

use App\Models\Course;
use Illuminate\Database\Seeder;

class OnlineCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Course::create([
            'name'          => 'Salsa Fusion',
            'tagline'       => 'with Kouame and Fred Dancefloor',
            'slug'          => 'salsa-con-afro-online',            
            'excerpt'       => '<div class="px-6 py-4"><ul class="text-gray-700 text-base list-disc pl-5"><li>Learn the Dancefloor Fusions Style</li><li>Improve your foundations: Groove, Isolation, Afro Movement</li><li>Learn how to introduce Urban dances and Afro in your salsa</li><li>Get the special tips to make your moves look better</li></ul></div>',
            'description'   => '<ul class="text-lg list-disc pl-5 my-5"><li>Classes recorded live with the vibe of a real dance class.</li><li>Videos are on a Facebook group.</li><li>You register, pay the fee and give us your Facebook contact.</li><li>You integrate the “Dancefloor Fusion Intensive Week” Facebook group.</li><li>You can follow the different video classes at your rhythm as many time as you want during 1 month on the group.</li><li>You can ask questions and interact with us by writing on the group.</li></ul>',
            'online_desc'   => '',
            'level'         => 'All levels',
            'focus'         => 'footwork',
            'type'          => 'class',
            'is_online'     => '1',
            'teaser_video_1'=> '<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FDancefloorGeneva%2Fvideos%2F529697621057960%2F&show_text=0&width=560" width="100%" height="650" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>',
            'full_price'    => 45.00,  
            'online_price'  => 45.00,  
            'online_link'   => 'https://www.facebook.com/groups/961321934308586', 
            'thumbnail'     => 'sf.jpg',
        ]);

        Course::create([
            'name'          => 'Salsa con Afro',
            'slug'          => 'salsa-con-afro-online',
            'tagline'       => 'with Kouame DANCEFLOOR',
            'excerpt'       => '<div class="px-6 py-4"><ul class="text-gray-700 text-base list-disc pl-5"><li>Improve your Afro-cuban Technics & Steps</li><li>Focus on isolation and energy to make your moves look better</li><li>Learn how to integrate Afro-cuban moves in salsa</li><li>Learn an awesome choreography</li></ul></div>',
            'description'   => '<ul class="text-lg list-disc pl-5 my-5"><li>Class were recorded live in Geneva.</li><li>For those who cannot join, you can follow our online class on Facebook</li><li>You register, pay the fee, so you can join our private Facebook group</li><li>You integrate the “Dancefloor - Salsa con afro” Facebook group.</li><li>You can follow the classes live or watch them later during 1 month on the group.</li><li>For those who cannot watch class live, Online videos will be available</li><li>We will answer questions during the live class as well as later on the facebook group.</li></ul>',
            'online_desc'   => '',
            'level'         => 'All levels',
            'focus'         => 'footwork',
            'type'          => 'class',
            'is_online'     => '1',
            'status'        => 'finished',
            'teaser_video_1'=> '<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fdancefloornews%2Fvideos%2F455422501774772%2F&show_text=false&width=734&appId=472211349901563&height=411" width="100%" height="650" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" allowFullScreen="true"></iframe>',
            'online_link'   => 'https://www.facebook.com/groups/794815677923136/',   
            'thumbnail'     => 'cours-afro.jpg',        
            'full_price'    => 30.00,  
            'online_price'  => 30.00,  
        ]);


    }
}







  
  
    // $table->id();
    // $table->string('name');
    // $table->string('slug');
    // $table->text('description')->nullable();            
    // $table->text('excerpt')->nullable();            
    // $table->text('')->nullable();            
    // $table->string('tagline')->nullable();  
    // $table->string('keywords')->nullable();  
    
    // $table->date('start_date')->nullable();
    // $table->date('end_date')->nullable();
    
    // $table->boolean('monday')->nullable();            
    // $table->time('start_time_mon')->nullable();
    // $table->time('end_time_mon')->nullable();

    // $table->boolean('tuesday')->nullable();                        
    // $table->time('start_time_tue')->nullable();
    // $table->time('end_time_tue')->nullable();

    // $table->boolean('wednesday')->nullable();                        
    // $table->time('start_time_wed')->nullable();
    // $table->time('end_time_wed')->nullable();

    // $table->boolean('thursday')->nullable();            
    // $table->time('start_time_thu')->nullable();
    // $table->time('end_time_thu')->nullable();

    // $table->boolean('friday')->nullable();                        
    // $table->time('start_time_fri')->nullable();
    // $table->time('end_time_fri')->nullable();

    // $table->boolean('saturday')->nullable();                        
    // $table->time('start_time_sat')->nullable();
    // $table->time('end_time_sat')->nullable();

    // $table->boolean('sunday')->nullable();                        
    // $table->time('start_time_sun')->nullable();
    // $table->time('end_time_sun')->nullable();
    
    // $table->string('level')->nullable();
    // $table->integer('level_number')->nullable();

    // $table->text('teaser_video_1')->nullable();
    // $table->text('teaser_video_2')->nullable();
    // $table->text('teaser_video_3')->nullable();

    // $table->decimal('full_price')->nullable();
    // $table->decimal('reduced_price')->nullable();
    // $table->decimal('promo_price')->nullable();
    // $table->decimal('live_price')->nullable();
    // $table->decimal('online_price')->nullable();
                
    // $table->string('thumbnail')->nullable();                    
    // $table->string('portrait')->nullable();                    
                
    // $table->set('focus',['partnerwork','footwork','choreography', 'styling', 'isolations', 'theory', 'wellness']);
    // $table->enum('type',['bootcamp','class', 'workshop'])->nullable(); 
    // $table->boolean('')->default(0);
    // $table->enum('status',['active','finished','draft'])->nullable();
    
    // $table->string('online_link')->nullable(); 
    // $table->integer('limit')->nullable();
    // // $table->string('online_id')->nullable(); 
    // // $table->string('online_password')->nullable();

    // $table->boolean('to_waiting')->nullable()->default(0);
    
    // $table->unsignedBigInteger('user_id');
  