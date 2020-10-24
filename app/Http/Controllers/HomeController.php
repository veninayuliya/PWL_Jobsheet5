<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $homes = Home::find(1);
        return view ('bspost',['homes' => $homes]);
        
        $value = Cache::remember('articles',$seconds, function(){
        return DB::table('homes')->get();
        });
    }
}
