<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'EventID';

    protected $fillable = [
        'EventName', 'Description', 'Date', 'Time', 'Location'
    ];

    // Relationships
    public function registrations()
    {
        return $this->hasMany(Registration::class, 'EventID', 'EventID');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'registrations', 'EventID', 'UserID');
    }
}
