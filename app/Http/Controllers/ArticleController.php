<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class ArticleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function getById($id){
        $articles = Article::find($id);
        return view ('bshome2',['articles' => $articles]);

        $value = Cache::remember('articles',$seconds, function(){
        return DB::table('homes')->get();
        });
    }
}
