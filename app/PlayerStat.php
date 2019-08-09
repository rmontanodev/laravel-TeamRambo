<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerStat extends Model
{
    protected $fillable = [
        'name', 'player_id', 'position_id', 'height', 'weight', 'jersey_number', 'weak_foot', 'good_foot', 'ambidextrous', 'age', 'goals', 'red_cards', 'yellow_cards', 'total_matches', 'starting_lineup'
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
