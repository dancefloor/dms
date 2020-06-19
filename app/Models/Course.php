<?php
// tutorial https://laraveldaily.com/embed-and-parse-youtube-vimeo-videos-with-laravel-embed-package/
// https://laracasts.com/discuss/channels/general-discussion/is-there-a-way-to-change-video-site-link-to-video-embed-link-using-laravel

namespace App\Models;

//use Eloquent as Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Models\Registration;
use Cohensive\Embed\Facades\Embed;

/**
 * Class Course
 * @package App\Models
 * @version May 26, 2020, 3:43 pm UTC
 *
 * @property string $name
 * @property string $description
 * @property string $promo_video
 * @property string $start_date
 * @property time $start_time
 * @property string $end_date
 * @property time $end_time
 * @property string $level
 * @property number $full_price
 * @property number $reduced_price
 * @property number $promo_price
 * @property string $color
 * @property string $cover_image
 * @property string $icon
 */
class Course extends Model
{
    use SoftDeletes;

    public $table = 'courses';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'excerpt',
        'tagline',

        'start_date',
        'end_date',

        'monday',
        'start_time_mon',
        'end_time_mon',

        'tuesday',                
        'start_time_tue',
        'end_time_tue',

        'wednesday',
        'start_time_wed',
        'end_time_wed',

        'thursday',
        'start_time_thu',
        'end_time_thu',

        'friday',
        'start_time_fri',
        'end_time_fri',

        'saturday',
        'start_time_sat',
        'end_time_sat',

        'sunday',
        'start_time_sun',
        'end_time_sun',

        'teaser_video_1',
        'teaser_video_2',
        'teaser_video_3',

        'online_link',
        'online_id',
        'online_password',

        'level',
        'level_number',

        'full_price',
        'reduced_price',
        'promo_price',

        'cover_image',
        'focus',
        'type',

        'limit',
    ];


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'            => 'integer',
        'name'          => 'string',
        'description'   => 'string',
        'excerpt'       => 'string',
        'tagline'       => 'string',

        'teaser_video_1' => 'string',
        'teaser_video_2' => 'string',
        'teaser_video_3' => 'string',

        'monday'        => 'boolean',
        'tuesday'       => 'boolean',
        'wednesday'     => 'boolean',
        'thursday'      => 'boolean',
        'friday'        => 'boolean',
        'saturday'      => 'boolean',
        'sunday'        => 'boolean',

        'start_date'    => 'date',
        'end_date'      => 'date',

        'start_time_mon'=> 'time',
        'end_time_mon'  => 'time',
        'start_time_tue'=> 'time',
        'end_time_tue'  => 'time',
        'start_time_wed'=> 'time',
        'end_time_wed'  => 'time',
        'start_time_thu'=> 'time',
        'end_time_thu'  => 'time',
        'start_time_fri'=> 'time',
        'end_time_fri'  => 'time',
        'start_time_sat'=> 'time',
        'end_time_sat'  => 'time',
        'start_time_sun'=> 'time',
        'end_time_sun'  => 'time',

        'level'         => 'string',
        'level_number'  => 'integer',

        'full_price'    => 'float',
        'reduced_price' => 'float',
        'promo_price'   => 'float',

        'cover_image'   => 'string',
        'status'        => 'string',
        'focus'         => 'string',
        'type'          => 'string',

        'limit'         => 'integer',

        'online_link'   => 'string',
        'online_id'     => 'string',
        'online_password' => 'string',
    ];


    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name'          => 'required',
    ];

    public function getformattedPriceAttribute()
    {
        
        $format = new \NumberFormatter('fr_CH', \NumberFormatter::CURRENCY);
        return $format->formatCurrency($this->full_price, 'CHF');
    }

    public function styles()
    {

        return $this->belongsToMany(Style::class);
    }


    public function students()
    {
        return $this->belongsToMany(User::class, 'registrations', 'course_id', 'user_id')
            ->using(Registration::class)            
            ->withPivot('role','status')
            ->wherePivot('role','student');
    }

    public function teachers()
    {
        return $this->belongsToMany(User::class, 'registrations', 'course_id', 'user_id')->using(Registration::class)->wherePivot('role', 'instructor');
    }

    public function assistants()
    {
        return $this->belongsToMany(User::class, 'registrations', 'course_id', 'user_id')->using(Registration::class)->wherePivot('role', 'assistant');
    }


    public function hasStyle($id)
    {                
        return in_array($id, $this->styles()->pluck('style_id')->toArray()); 
    }

    public function hasTeacher($id)
    {
        return in_array($id, $this->teachers()->pluck('user_id')->toArray());
    }

    public function hasStudent($id)
    {
        return in_array($id, $this->students()->pluck('user_id')->toArray());
    }

    public function getDaysAttribute()
    {
        $days = [];
        if ($this->monday == 1)     { array_push($days,'mon');}
        if ($this->tuesday == 1)    { array_push($days,'tue');}
        if ($this->wednesday == 1)  { array_push($days,'wed');}
        if ($this->thursday == 1)   { array_push($days,'thu');}
        if ($this->friday == 1)     { array_push($days,'fri');}
        if ($this->saturday == 1)   { array_push($days,'sat');}
        if ($this->sunday == 1)     { array_push($days,'sun');}
        return $days;
    }


    public function displayVideo(int $num = 1)    
    {
        switch ($num) {
            case 2:
                $video = $this->teaser_video_2;
                break;
            case 3:
                $video = $this->teaser_video_3;
                break;
            default:
                $video = $this->teaser_video_1;
                break;
        }

        $embed = Embed::make($video)->parseUrl();

        if (!$embed)
            return '';

        $embed->setAttribute(['width' => '100%', 'height' => 450]);
        return $embed->getHtml();
    }

    function youtubeID($url)
    {
        if(strlen($url) > 11)
        {
            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match))
            {
                return $match[1];
            }
            else
                return false;
        }

        return $url;
    }
}
