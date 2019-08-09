<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Team extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'stadium_id', 'img'
    ];

    public function stadium()
    {
        return $this->belongsTo(Stadium::class);
    }
    public function players(){
        return $this->hasMany(Player::class);
    }
}
