<?php

namespace App\Http\Controllers;

use App\UserType;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = UserType::get();
        return view('users.create',compact('roles'));
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
        $email = $request->input('email');
        $password = $request->input('password');
        $role = $request->input('role');
        if(User::where('email','=',$email)->count()>0){
            $users = User::get();
            return view('users.index',compact('users'));
        }
        User::create(['name'=>$name,'email'=>$email,'password'=>Hash::make($password),'user_type_id'=>$role]);
        $users = User::get();
        return view('users.index',compact('users'));
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
        $user = User::where('id', $id)->first();
        $roles = UserType::get();

        return view('users.edit', compact('user', 'roles'));
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
            'user_type_id' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            ];

        $user = User::where('id', $id)->update($data);

        $users = User::get();
        return view('users.index',compact('users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', $id)->delete();

        $users = User::get();
        return view('users.index',compact('users'));
    }
}
