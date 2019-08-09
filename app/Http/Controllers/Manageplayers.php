<?php

namespace App\Http\Controllers;

use App\Player;
use App\PlayerStat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Manageplayers extends Controller
{
    public function index(){
        $players = Player::get();
        $stats = PlayerStat::get();

        $array_players_stats = [];

        foreach ($stats as $stat)
        {
            $array_players_stats[$stat->id] = $stat->player_id;
        }
        return view('manageplayers.index',compact('players', 'array_players_stats'));
    }
}
