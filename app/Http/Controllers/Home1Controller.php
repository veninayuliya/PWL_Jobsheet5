<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class Home1Controller extends Controller
{
    public function getAll(){
        $articles = Article::all();
        return view ('bshome',['articles' => $articles]);
        
        $value = Cache::remember('articles',$seconds, function(){
            return DB::table('articles')->get();
        });
    }
}
