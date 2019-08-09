<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Calendar extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'match_id', 'competition_id'
    ];

    public function matches()
    {
        return $this->hasMany(Match::class);
    }

    public function competitions()
    {
        return $this->hasMany(Competition::class);
    }
}
