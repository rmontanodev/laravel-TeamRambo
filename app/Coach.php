<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Coach extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_id', 'name', 'age', 'country'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
