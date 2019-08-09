<?php

namespace App\Http\Controllers;

use App\Player;
use App\PlayerStat;
use App\User;
use Illuminate\Http\Request;
use App\Team;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('manageplayers.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::get();
        return view('player.create',compact('teams'));
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
        $imgavatar = $request->input('imgavatar');
        $team = $request->input('team');
        $email = $request->input('email');
        if (User::where('email', '=', $email)->count() > 0) {
            echo "ya existe hijueputa";
        }
        else{
            User::create(['name'=>$name,'user_type_id'=>3,'email'=>$email,'password'=>Hash::make($name)]);
            $user = User::orderBy('id','desc')->first();
            Player::create(['team_id'=>$team,'user_id'=>$user->id,'img_avatar'=>$imgavatar]);
            $playerid = Player::where('user_id',$user->id)->first();
            $setplayerid = User::find($user->id);
            $setplayerid->player_id = $playerid->id;
            $setplayerid->save();
            $players = Player::get();
            return view('manageplayers.index',compact('players'));
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
        $player = PlayerStat::where('player_id', $id)->first();
        $urls = Player::where('id', $id)->first();

        $array_insta = [];
        $array_insta = unserialize($urls->instagram_url);

        $array_facebook = [];
        $array_facebook = unserialize($urls->facebook_url);

        return view('partials.playerstats', compact('player', 'array_insta', 'array_facebook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::where('id', $id)->first();

        return view ('player.edit', compact('player'));
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
            'email' => $request->email,
        ];

        $player = Player::where('id', $id)->update($data);

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
        $player = Player::where('id', $id)->delete();


        return redirect('teams');
    }
}
