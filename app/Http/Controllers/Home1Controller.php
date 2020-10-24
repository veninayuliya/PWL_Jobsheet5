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
    public function index(){
        $articles = Article::all();
        return view('manage',['articles' => $articles]);
    }
    public function add(){
        return view('addarticle');
    }
    public function create(Request $request){
        Article::create([
            'title'=> $request->title,
            'content'=> $request->content,
            'address'=> $request->address, 
            'price'=> $request->price, 
            'open'=> $request->open,
            'detail'=> $request->detail,
            'featured_image'=> $request->image
        ]);
        return redirect('/manage');
    }
    public function edit($id){
        $articles = Article::find($id);
        return view('editarticle',['articles'=>$articles]);
    }
    public function update($id, Request $request){
        $articles = Article::find($id);
        $articles->title = $request->title;
        $articles->content = $request->content;
        $articles->address = $request->address;
        $articles->price = $request->price;
        $articles->open = $request->open;
        $articles->detail = $request->detail;
        $articles->featured_image = $request->image;
        $articles->save();
        return redirect('/manage');

    }
    public function delete($id){
        $articles = Article::find($id);
        $articles->delete();
        return redirect('/manage');
    }
}
