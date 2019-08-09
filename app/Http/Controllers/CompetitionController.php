<?php

namespace App\Http\Controllers;

use App\Competition;
use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class competitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competitions = Competition::get();
        return view('competition.index',compact('competitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::get();
        return view('competition.create',compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $competitioname = $request->input('competitionname');
        $fechastart = $request->input('fechastart');
        $fechaend = $request->input('fechaend');
        $imgcomp = $request->input('imgcomp');
        if(Competition::where('name','=',$competitioname)->count()>0){
            $competitions = Competition::get();
            return view('competition.index',compact('competitions'));        }
        else{
            Competition::create(['name'=>$competitioname,'start_competition'=>$fechastart,'end_competition'=>$fechaend,'img'=>$imgcomp]);
            $competitions = Competition::get();
            return view('competition.index',compact('competitions'));
        }

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
        $competition = Competition::where('id', $id)->first();

        return view('competition.edit', compact('competition'));
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
            'name' => $request->competitionname,
            'start_competition' => $request->fechastart,
            'end_competition' => $request->fechaend,
            'img' => $request->imgcomp

        ];

        $competiton = Competition::where('id', $id)->update($data);

        $competitions = Competition::get();
        return view('competition.index',compact('competitions'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $competition = Competition::where('id', $id)->delete();

        $competitions = Competition::get();
        return view('competition.index',compact('competitions'));
    }
}
