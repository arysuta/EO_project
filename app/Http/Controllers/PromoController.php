<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Promo;
use App\Kategori;
use App\Detgambar;
use App\User;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promos = Promo::all();
        $kategoris = Kategori::all();
        return view('admin.promo',compact('promos', 'kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promo = new Promo();
        $promo->promo = $request->nama;
        $promo->kategori_id = $request->kategori;
        $promo->lokasi = $request->lokasi;
        $promo->harga_book = $request->harga_book;
        $promo->deskripsi = $request->deskripsi;
        $promo->Harga = $request->harga;
        $promo->save();
        $promo2 = Promo::max('id');
        if($request->hasFile('file')) {
            foreach ($request->file as $file) {
                $filename = $file->getClientOriginalName();
                $filesize = $file->getClientSize();
                $file->move('files', $filename);
                $fileModel = new Detgambar ();
                $fileModel->promo_id = $promo2;
                $fileModel->nama_gambar = $filename;
                $fileModel->ukuran = $filesize;
                $fileModel->save();
                # code...
            }
        }
        return redirect(route('Promo.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::all();
        return view('admin.promo',compact('promos'));
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
        $promo = Promo::FindOrFail($id);
        $promo->promo = $request->nama;
        $promo->kategori_id = $request->kategori;
        $promo->lokasi = $request->lokasi2;
        $promo->harga_book = $request->harga_book2;
        $promo->deskripsi = $request->deskripsi2;
        $promo->Harga = $request->harga;
        $promo->save();
        return redirect(route('Promo.index'));
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

    // public function upload(Request $request): RedirectResponse
    // {
         
    //     $uploadedFile = $request->file('file');        

    //     $path = $uploadedFile->store('public/files');

    //     $file = Promo::create([
    //     'title' => $request->title ?? $uploadedFile->getClientOriginalName(),
    //     'filename' => $path
    // ]);
    // return redirect()
    // }
}
