<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'registrations';
    protected $primaryKey = 'RegistrationID';

    protected $fillable = [
        'UserID', 'EventID'
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'UserID', 'UserID');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'EventID', 'EventID');
    }
}

