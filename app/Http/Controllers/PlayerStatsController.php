<?php

namespace App\Http\Controllers;

use App\Player;
use App\PlayerStat;
use App\Position;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class PlayerStatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = PlayerStat::where('player_id', $id)->first();
        $positions = Position::get();

        $array_positions = [];

        foreach ($positions as $position)
        {
            $array_positions[$position->id] = $position->name;
        }

        return view('player_stats.edit', compact('player', 'array_positions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'position_id' => $request->position,
            'weight' => $request->weight,
            'height' => $request->height,
            'jersey_number' => $request->jersey_number,
            'weak_foot' => $request->weak_foot,
            'good_foot' => $request->good_foot,
            'ambidextrous' => $request->ambidextrous,
            'age' => $request->age,
            'goals' => $request->goals,
            'red_cards' => $request->red_cards,
            'yellow_cards' => $request->yellow_cards,
            'total_matches' => $request->total_matches,
            'starting_lineup' => $request->starting_lineup
            ];

        $player = PlayerStat::where('player_id', $id)->update($data);

        return redirect('teams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function view_stats($id)
    {
        $player = Player::where('id', $id)->first();
        $positions = Position::get();

        $array_positions = [];

        foreach ($positions as $position)
        {
            $array_positions[$position->id] = $position->name;
        }
        return view('player_stats.add', compact('player', 'array_positions'));
    }

    public function crear(Request $request, $id)
    {
        $data = [
            'player_id' => $id,
            'position_id' => $request->position,
            'weight' => $request->weight,
            'height' => $request->height,
            'jersey_number' => $request->jersey_number,
            'weak_foot' => $request->weak_foot,
            'good_foot' => $request->good_foot,
            'ambidextrous' => $request->ambidextrous,
            'age' => $request->age,
            'goals' => $request->goals,
            'red_cards' => $request->red_cards,
            'yellow_cards' => $request->yellow_cards,
            'total_matches' => $request->total_matches,
            'starting_lineup' => $request->starting_lineup
        ];

        $player = PlayerStat::insert($data);

        return redirect('teams');
    }

    public function destroy($id)
    {
        //
    }
}
