<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\KategoriAset;
use App\Models\User;
use Illuminate\Http\Request;

class AsetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asets = Aset::all();
        return view('dashboard/aset/index', ['asets' => $asets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_asets = KategoriAset::all();
        $users = User::where('role', 'NOT LIKE', 'superadmin')->get();
        return view('dashboard/aset/create', ['kategori_asets' => $kategori_asets, 'users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(json_encode($request->kategori_aset_id));
        $request->validate([
            'user_id' => 'required',
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_aset_id' => 'required',
            'merk_tipe' => 'required',
            'ukuran' => 'required',
            'bahan' => 'required',
            'tahun_pembelian' => 'required',
            'harga' => 'required',
        ]);

        Aset::create([
            'user_id' => $request->user_id,
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'kategori_aset_id' => json_encode($request->kategori_aset_id),
            'merk_tipe' => $request->merk_tipe,
            'ukuran' => $request->ukuran,
            'bahan' => $request->bahan,
            'tahun_pembelian' => $request->tahun_pembelian,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('dashboard/aset')->with('status', 'Data Aset TIK Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function show(Aset $aset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function edit(Aset $aset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aset $aset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aset $aset)
    {
        //
    }
}
