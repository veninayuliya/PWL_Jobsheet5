<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Gate;
use PDF;
class Home1Controller extends Controller//halaman u/ semua artikel
{
    public function getAll(){
        $articles = Article::all();
        return view ('bshome',['articles' => $articles]);
        
        $value = Cache::remember('articles',$seconds, function(){
            return DB::table('articles')->get();
        });
    }
    public function index(){
        $this->middleware(function($request, $next){
            if(Gate::allows('manage-articles')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
        $articles = Article::all();
        return view('manage',['articles' => $articles]);
    }
    public function add(){
        $this->middleware(function($request, $next){
            if(Gate::allows('manage-articles')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
        return view('addarticle');
    }
    public function create(Request $request){
        $this->middleware(function($request, $next){
            if(Gate::allows('manage-articles')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
        if($request->file('image')){
            $image_name = $request->file('image')->store('images','public');
        }
        Article::create([
            'title'=> $request->title,
            'content'=> $request->content,
            'address'=> $request->address, 
            'price'=> $request->price, 
            'open'=> $request->open,
            'detail'=> $request->detail,
            'featured_image'=> $image_name,
        ]);
        return redirect('/manage');
    }
    public function edit($id){
        $this->middleware(function($request, $next){
            if(Gate::allows('manage-articles')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
        $articles = Article::find($id);
        return view('editarticle',['articles'=>$articles]);
    }
    public function update($id, Request $request){
        $this->middleware(function($request, $next){
            if(Gate::allows('manage-articles')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
        $articles = Article::find($id);
        
        $articles->title = $request->title;
        $articles->content = $request->content;
        $articles->address = $request->address;
        $articles->price = $request->price;
        $articles->open = $request->open;
        $articles->detail = $request->detail;

        if($articles->featured_image && 
        file_exists(storage_path('app/public/'. $articles->featured_image))){
            \Storage::delete('public/'.$articles->featured_image);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $articles->featured_image = $image_name;

        $articles->save();
        return redirect('/manage');

    }
    public function delete($id){
        $this->middleware(function($request, $next){
            if(Gate::allows('manage-articles')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
        $articles = Article::find($id);
        $articles->delete();
        return redirect('/manage');
    }
    public function cetak_pdf(){
        $articles = Article::all();
        $pdf = PDF::loadview('articles_pdf', ['articles'=>$articles]);
        return $pdf->stream();
    }
    
}
