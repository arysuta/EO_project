<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){
        // dd($request->all());

        if(Auth::attempt([
            'email' => $request->email, 
            'password'=>$request->password,
            'status'=>'aktif']))
        {
            $user = User::where('email',$request->email)
                ->first();
            if($user->is_admin()){
                return redirect()->route('dashboard');
            }
            return redirect()->route('home');
        }
        return redirect()->back()->with('fail', 'Gagal Login! Username/ Password salah!');
    }

     public function refreshCaptcha(){
        return response()->json(['captcha'=> captcha_img()]);
    }
}
