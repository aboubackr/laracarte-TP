<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	//La page d'accueil
    public function home(){
    	return view('pages/home');
    }
    //La page About
    public function about(){
    	return view('pages/about');
    }

}
