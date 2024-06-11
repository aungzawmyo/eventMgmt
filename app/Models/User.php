<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Laravel\Sanctum\HasApiTokens;

 
class User extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
    protected $table = 'users';
    protected $primaryKey = 'UserID';

    protected $fillable = [
        'Username', 'Password', 'Role'
    ];

    // The attributes that should be hidden for arrays.
    protected $hidden = [
        'Password',
    ];

    // Relationships
    public function registrations()
    {
        return $this->hasMany(Registration::class, 'UserID', 'UserID');
    }
    

    public function events()
    {
        return $this->belongsToMany(Event::class, 'registrations', 'UserID', 'EventID');
    }
}