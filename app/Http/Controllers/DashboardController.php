<?php

namespace App\Http\Controllers;
use App\Player;
use App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
            return view('dashboard.index');

    }

    public function edit($id)
    {
        $user = User::where('id', $id)->first();

        return view('dashboard.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $data = [
          'name' => $request->name,
          'email' => $request->email,
          'twitter_url' => $request->twitter_url,
          'facebook_url' => $request->facebook_url,
          'instagram_url' => $request->instagram_url
        ];

        $user = User::where('id', $id)->update($data);

        return redirect('dashboard');
    }
}
