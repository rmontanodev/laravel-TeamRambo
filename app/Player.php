<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Player extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'img_avatar','user_id', 'team_id', 'facebook_url', 'instagram_url', 'twitter_url'
    ];

    public function userType()
    {
        return $this->belongsTo(UserType::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
