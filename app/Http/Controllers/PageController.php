<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
    	return 'Selamat Datang';
    }
    public function about(){
    	return 'NIM : 1931710048 <br> NAMA : VENINA YULIYA';
    }
    public function articles($page){
    	return 'Halaman artikel dengan id '.$page;
    }
}