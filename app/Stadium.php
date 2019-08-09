<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Stadium extends Model
{
    use Notifiable;
    protected $table = 'stadiums';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'capacity', 'city', 'country', 'address', 'year_constructed'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
