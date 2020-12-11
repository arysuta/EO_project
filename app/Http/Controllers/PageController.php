<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detgambar;

class PageController extends Controller
{
    public function index(){
    	$data = Detgambar::all();
    	return view('home', compact('data'));
    }
}
