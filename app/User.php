<?php
// https://stackoverflow.com/questions/51091501/laravel-many-to-many-on-pivot-table-with-eloquent

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Course;
use App\Models\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 
        'lastname', 
        'email', 
        'password', 
        'birthday', 
        'gender',
        'picture',
        
        'mobile',
        'phone',
        'mobile_verified_at',
        'phone_verified_at',

        'profession',
        'biography',
        'branch',
        'aware_of_df',
        'work_status',
        'price_hour',

        'street',
        'street_number',
        'address_info',
        'postal_code',
        'city',
        'state',
        'country',
        'lat',
        'lng',

        'facebook',
        'linkedin',
        'instagram',
        'youtube',
        'tiktok',
        'twitter',
        'skype',
        'snapchat',
        'pinterest',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function assignRole($role)
    {
        $this->roles()->sync($role);
    }

    public function hasRole($id)
    {
        return in_array($id, $this->roles()->pluck('id')->toArray()); 
    }

    public function permissions()
    {
        return $this->roles->map->permissions->flatten()->pluck('slug')->unique();
    }

    public function teaches()
    {
        return $this->belongsToMany(Course::class, 'registrations', 'user_id', 'course_id')
            ->using('App\Models\Registration')
            ->withPivot('role')
            ->wherePivot('role','instructor')
            ->withTimestamps();
    }

    public function assists()
    {
        return $this->belongsToMany(Course::class, 'registrations', 'user_id', 'course_id')
            ->using('App\Models\Registration')
            ->withPivot('role')
            ->wherePivot('role','assistant')
            ->withTimestamps();
    }

    public function learns()
    {
        return $this->belongsToMany(Course::class, 'registrations', 'user_id', 'course_id')
            ->using('App\Models\Registration')
            ->withPivot('role','status')
            ->wherePivot('role','student')
            ->withTimestamps();
    }
    
    public function pendingCourses()
    {
        return $this->belongsToMany(Course::class, 'registrations', 'user_id', 'course_id')
            ->using('App\Models\Registration')
            ->withPivot('status')
            ->wherePivot('status','pending')
            ->withTimestamps();
    }

    public function payedCourses()
    {
        return $this->belongsToMany(Course::class, 'registrations', 'user_id', 'course_id')
            ->using('App\Models\Registration')
            ->withPivot('status')
            ->wherePivot('status','payed')
            ->withTimestamps();
    }

    public function getAvatarAttribute()
    {
        
        if (!$this->picture) {
            return $this->gender === 'male' ? asset('images/avatar-male.png') : asset('images/avatar-female.png');
        }

        return $this->picture;
    }

    public function isAdmin()
    {
        $admin = Role::where('slug','admin')->first();
        return in_array($admin->id , $this->roles()->pluck('id')->toArray());
        //return $admin;
    }

} 