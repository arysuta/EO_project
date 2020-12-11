<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Detgambar;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = Detgambar::all();
       return view('home', compact('data'));
    }
    public function home(Request $request)
    {
        dd($request->all());
        if(Auth::attempt(['email' => $request->email, 'password'=>$request->password]))
        {
            $user = User::where('email',$request->email)->first();
            if($user->is_admin()){
                return redirect()->route('dashboard');
            }
            return redirect()->route('home');
        }
    }

    public function mySearch(Request $request)

    {

    	if($request->has('search')){

    		$users = User::search($request->get('search'))->get();	

    	}else{

    		$users = User::get();

    	}


    	return view('member_org', compact('users'));

    }



}
