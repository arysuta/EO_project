<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detgambar;
use App\Promo;
use App\Transaksi;

class DetgambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function tampil()
    {
    $images = Detgambar::all();
    return view ('user.galeri', compact('images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return 'masuk';
        $promos = Promo::find($id);
        $images = Detgambar::where('promo_id', $id)->get();

        return view ('admin.gambarPromo', compact('promos','images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function bukti($id)
    {
        // return 'masuk';
        $transaksis = Transaksi::find($id)->get();
        $data = $transaksis->where('id', $id);
        return view ('user.buktiBayar', compact('data'));
    }
}
