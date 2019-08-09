<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Classification extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'competition_id', 'team_id', 'points'
    ];

    public function competitions()
    {
        return $this->hasMany(Competition::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
