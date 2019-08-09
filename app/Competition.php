<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Competition extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','start_competition', 'end_competition', 'phases', 'img'
    ];
    public function matches(){
        return $this->hasMany(Match::class,'competition_id','id');
    }
}
