<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Wedding;
use App\Promo;
use App\Detgambar;
use App\User;
use App\Transaksi;
use DB;

class TransaksiController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $promo_id = $request->promo_id;
        $kategori = $request->ATMType;
        $no_rek = $request->no_rek;
        $atasnama = $request->atasnama;
        $transaksi = new Transaksi();
        $transaksi->user_id=$id;
        $transaksi->promo_id=$promo_id;
        $transaksi->jenis_bank=$kategori;
        $transaksi->no_rek=$no_rek;
        $transaksi->atasnama=$atasnama;
        $transaksi->save();
        $list = DB::table('transaksis')
            ->join('promos', 'promos.id', '=', 'transaksis.promo_id')
            ->join('kategoris', 'kategoris.id', '=', 'promos.kategori_id')
            ->orWhere('transaksis.status', '<>', 'cancel')
            ->where('transaksis.user_id', $id)
            ->select('transaksis.id','promos.promo', 'kategoris.kategori' ,'promos.harga_book', 'tanggal_pesan', 'jenis_bank', 'transaksis.status')->get();
        return view('user.OrderList',compact('list'));
        return view('user.OrderList', compact('list'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promos = Promo::join('kategoris','promos.kategori_id','=', 'kategoris.id')
        ->where('promos.id', $id)
        ->select('promos.promo', 'promos.id', 'kategori_id', 'kategori', 'harga_book')->get();
        return view('user.Payment',compact('promos'));
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

    public function tampil($id)
    {
        $list = DB::table('transaksis')
            ->join('promos', 'promos.id', '=', 'transaksis.promo_id')
            ->join('kategoris', 'kategoris.id', '=', 'promos.kategori_id')
            ->orWhere('transaksis.status', '<>', 'cancel')
            ->where('transaksis.user_id', $id)
            ->select('transaksis.id','promos.promo', 'kategoris.kategori' ,'promos.harga_book', 'tanggal_pesan', 'jenis_bank', 'transaksis.status')->get();
        return view('user.OrderList',compact('list'));
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
        $trans =  Transaksi::find($id);
        $trans->bukti_bayar = "bukti_bayar_" . $id .".". $request->file('bukti_bayar')->getClientOriginalExtension();
        $request->file('bukti_bayar')->move('bukti_file', $trans->bukti_bayar);

        $trans->save();
        return redirect('user/OrderList/'.$trans->user_id);
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

    public function cancel($id)
    {
        $trans = Transaksi::find($id);
        $trans->status = "cancel";
        $trans->save();

        return redirect('user/OrderList/'.$trans->user_id);
    }

    public function accept($id)
    {
        $trans = Transaksi::find($id);
        $trans->status = "accepted";
        $trans->save();

        $list = Transaksi::join('promos','transaksis.promo_id','=', 'promos.id')
        ->join('users', 'transaksis.user_id', '=', 'users.id')
        ->select( 'transaksis.id','users.name', 'promos.promo', 'promos.harga_book', 'tanggal_pesan', 'jenis_bank', 'transaksis.status', 'no_rek', 'atasnama')->get();
        return view('admin.transaction', compact('list'));
    } 
    
        public function decline($id)
    {
        $trans = Transaksi::find($id);
        $trans->status = "decline";
        $trans->save();

        $list = Transaksi::join('promos','transaksis.promo_id','=', 'promos.id')
        ->join('users', 'transaksis.user_id', '=', 'users.id')
        ->select( 'transaksis.id','users.name', 'promos.promo', 'promos.harga_book', 'tanggal_pesan', 'jenis_bank', 'transaksis.status', 'no_rek', 'atasnama')->get();
        return view('admin.transaction', compact('list'));
    } 
}
