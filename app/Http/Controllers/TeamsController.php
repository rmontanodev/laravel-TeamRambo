<?php

namespace App\Http\Controllers;

use App\Coach;
use App\Player;
use App\Stadium;
use Illuminate\Support\Facades\Auth;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::get();
        return view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStadium(){
        $stadiums = Stadium::get();
        return view('teams.createstadium',compact('stadiums'));
    }
    public function storeStadium(Request $request){
        if($request->input('maneraenviar')=='crear'){
            if(Stadium::where('name','=',$request->input('stadiumname'))->count()>0){
                echo Stadium::where('name','=',$request->input('stadiumname'))->count();
                $stadium = Stadium::orderBy('id', 'desc')->first();
                return view('teams.toteam',compact('stadium'));
            }
            else{
                echo Stadium::where('name','=',$request->input('stadiumname'))->count();
                $stadiumname = $request->input('stadiumname');
                $capacidad = $request->input('capacidad');
                $ciudad = $request->input('ciudad');
                $direccion = $request->input('direccion');
                $pais = $request->input('pais');
                $añoconstruido = $request->input('añoconstruido');
                Stadium::create(['name'=>$stadiumname,'capacity'=>$capacidad,'city'=>$ciudad,'address'=>$direccion,'country'=>$pais,'year_constructed'=>$añoconstruido]);
                $stadium = Stadium::orderBy('id', 'desc')->first();
                return view('teams.toteam',compact('stadium'));
            }

        }
        elseif ($request->input('maneraenviar')=='existe'){
            echo $request->input('team');
            $stadiumid = $request->input('team');
            $stadium = Stadium::find($stadiumid);
            return view('teams.create',compact('stadium'));
        }
        else{
            echo "hola";
        }
    }

    public function editStadium($id)
    {
        $stadium = Stadium::where('id', $id)->first();

        return view('teams.edit_stadium', compact('stadium'));
    }

    public function updateStadium(Request $request, $id)
    {
        $data = [
          'name' => $request->name,
          'capacity' => $request->capacity,
          'address' => $request->address,
          'city' => $request->city,
          'country' => $request->country
        ];

        $stadium = Stadium::where('id', $id)->update($data);

        return redirect('teams');
    }

    public function deleteStadium($id)
    {
        $stadium = Stadium::where('id', $id)->delete();

        return redirect('teams');
    }

    public function create($stadiumid){
        $stadium =  Stadium::find($stadiumid);
        return view('teams.create',compact('stadium'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $img = $request->input('imgequipo');
        $stadiumid = $request->input('idstadium');
        if(Team::where('name','=',$request->input('name'))->count()>0){
            $teams = Team::get();
            return view('teams.index',compact('teams'));
        }
        else{
            Team::create(['name'=>$name,'img'=>$img,'stadium_id'=>$stadiumid]);
            $teams = Team::get();
            return view('teams.index',compact('teams'));
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
        $players = Player::where('team_id', $id)->get();
        $coach = Coach::where('team_id', $id)->first();
        $stadium = Stadium::where('id', $coach->team_id)->first();

        $matches = null;

        return view('teams.squad', compact('players', 'coach', 'matches', 'stadium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::where('id', $id)->first();
        $stadiums = Stadium::get();

        $array_stadiums = [];
        foreach ($stadiums as $stadium)
        {
            $array_stadiums[$stadium->id] = $stadium->name;
        }

        return view('teams.edit', compact('team', 'array_stadiums'));
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
          'name' => $request->name,
          'img' => $request->img,
          'stadium_id' => $request->stadium_id,
        ];

        $team = Team::where('id', $id)->update($data);

        return redirect('teams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();

        return redirect('teams');
    }
}
