<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
    	return view('hello', ['name'=>'Venina']);
   }
    }
