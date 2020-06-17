<?php

namespace App\Models;

use App\User;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
        'label'
    ];
    
    public function permissions()
    {
        return $this->belongsToMany(Permission::class)->withTimestamps();
    }
    
    public function allowTo($permission)
    {
        $this->permissions()->sync($permission);
    }
    
    public function hasPermission($id)
    {
        return in_array($id, $this->permissions->pluck('id')->toArray());
    }
    
    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}