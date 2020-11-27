<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use PDF;

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
        if($request->file('image')){
            $image_name = $request->file('image')->store('images','public');
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'roles' => $request->roles,
            'featured_image' => $image_name,
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

        if($users->featured_image &&
        file_exists(storage_path('app/public/'. $users))){
            \Storage::delete('public/'. $users->featured_image);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $users->featured_image = $image_name;

        $users->save();
        return redirect('/kelolauser');
    }
    public function delete($id){
        $users = User::find($id);
        $users->delete();
        return redirect('/kelolauser');
    }
    public function cetak_pdf(){
        $users = User::all();
        $pdf = PDF::loadview('users_pdf',['users'=>$users]);
        return $pdf->stream();
    }
}