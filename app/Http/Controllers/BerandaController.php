<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
class BerandaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //menghubungkan halaman home ke view
    public function index(){
        $homes = Home::find(1);
        return view ('bspost',['homes' => $homes]);
        
        $value = Cache::remember('articles',$seconds, function(){
        return DB::table('homes')->get();
        });
    }
}
