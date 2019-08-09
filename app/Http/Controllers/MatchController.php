<?php

namespace App\Http\Controllers;

use App\Competition;
use App\Match;
use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Match::get();
        return view('match.index',compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $competitions = Competition::get();
        $teams = Team::get();
        return view('match.create',compact('competitions','teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team1 = $request->input('team1');
        $team2 = $request->input('team2');
        $competition = $request->input('competitionController');
        $fecha = $request->input('fecha');
        $hora = $request->input('hora');
        Match::create(['date'=>$fecha,'time'=>$hora,'local'=>$team1,'visit'=>$team2,'competition_id'=>$competition]);
        $matches = Match::get();
        return view('match.index',compact('matches'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $match = Match::where('id', $id)->first();
        $competitions = Competition::get();
        $teams = Team::get();

        return view('match.edit', compact('match', 'competitions', 'teams'));
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
            'date' => $request->fecha,
            'time' => $request->hora,
            'competition_id' => $request->competition,
            'local' => $request->team1,
            'visit' => $request->team2
        ];

        $match = Match::where('id', $id)->update($data);

        $matches = Match::get();
        return view('match.index',compact('matches'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $match = Match::where('id', $id)->delete();

        $matches = Match::get();
        return view('match.index',compact('matches'));
    }
}
