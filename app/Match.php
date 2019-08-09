<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Match extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date', 'time', 'local', 'visit', 'result','competition_id'
    ];
    public function competition(){
        return $this->belongsTo(Competition::class);
    }
    public function team1(){
        return $this->belongsTo(Team::class,'local','id');
    }
    public function team2(){
        return $this->belongsTo(Team::class,'visit','id');
    }
}
