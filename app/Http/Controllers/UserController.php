<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Kategori;
use \App\Order;
use \App\User;


class UserController extends Controller
{
    public function index()
    {
        return view('user.birthday',compact(''));
    }
    
    public function Tampil($id)
    {
        $users = User::where('id', $id)->get();
        return view('user.myaccount',compact('users'));
    }


    public function store(Request $request)
    {
        Order::create($request->all());
        //dd($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $transaksi= Order::all();
        // return view('user.birthday_detail',compact('transaksi'));
    }

    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->name2;
        $users->phone = $request->phone2;
        $users->address = $request->address2;
        $users->jenis_kel = $request->jenis_kel2;
        $users->save();
        return redirect('/home');

    }
}
