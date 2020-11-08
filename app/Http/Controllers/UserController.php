<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('kelolauser',['users'=> $users]);
    }
    public function add(){
        return view('adduser');
    }
    public function create(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'roles' => $request->roles
        ]);
        return redirect('/kelolauser');
    }
    public function edit($id){
        $users = User::find($id);
        return view('edituser',['users'=>$users]); 
    }
    public function update($id, Request $request){
        $users = User::find($id);

        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->roles = $request->roles;
        $users->save();
        return redirect('/kelolauser');
    }
    public function delete($id){
        $users = User::find($id);
        $users->delete();
        return redirect('/kelolauser');
    }
}