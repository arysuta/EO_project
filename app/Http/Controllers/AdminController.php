<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Transaksi;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('admin', '0')->get();
        return view('admin.member_org',compact('users'));
    }
    

    public function create()
    {
        show();
    }

    
    public function store(Request $request)
    {
        User::create($request->all());
        //dd($request->all());
        return back();
    }

    
    public function show()
    {
        //$users= User::all();
        $users= User::where('admin', '0')->get();
        return view('admin.member_org',compact('users'));
    }


    public function showtrans()
    {
         $list = DB::table('transaksis')
            ->join('users', 'users.id', '=', 'transaksis.user_id')
            ->join('promos', 'promos.id', '=', 'transaksis.promo_id')
            ->join('kategoris', 'kategoris.id', '=', 'promos.kategori_id')
            ->select( 'transaksis.id','users.name', 'kategoris.kategori','promos.promo', 'promos.harga_book', 'tanggal_pesan', 'jenis_bank', 'transaksis.status', 'no_rek', 'atasnama')->get();
        return view('admin.transaction', compact('list'));

    }

   
    public function edit($id)
    {
        //
    }


    public function update(Request $request)
    {
        //dd($request->all());
        //$id = User::FindOrFail($request->id);
        //$id->update($request->all());
        // return $request->id;
        $user = User::find($request->id);
        
        
        $user->status = 'banned';
        $user->save();
        
        $users= User::where('admin', '0')->get();
        return redirect('/admin');
    }

   
    public function destroy(Request $request)
    {
        // dd($request->all());
        $id = User::FindOrFail($request->id);
        $id->delete($request->all());
        return back();
    }


}
