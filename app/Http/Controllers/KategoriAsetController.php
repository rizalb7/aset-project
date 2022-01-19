<?php

namespace App\Http\Controllers;

use App\Models\KategoriAset;
use Illuminate\Http\Request;

class KategoriAsetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_asets = KategoriAset::all();
        return view('dashboard/kategori-aset/index', ['kategori_asets' => $kategori_asets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/kategori-aset/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
        ]);

        KategoriAset::create([
            'nama_kategori' => $request->nama_kategori,
        ]);
        return redirect('dashboard/kategori-aset')->with('status', 'Data Kategori Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriAset  $kategori_aset
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriAset $kategori_aset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriAset  $kategori_aset
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriAset $kategori_aset)
    {
        return view('dashboard/kategori-aset/edit', ['kategori_aset' => $kategori_aset]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriAset  $kategori_aset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriAset $kategori_aset)
    {
        $request->validate([
            'nama_kategori' => 'required',
        ]);

        $kategori_aset->update([
            'nama_kategori' => $request->nama_kategori,
        ]);
        return redirect('dashboard/kategori-aset')->with('status', 'Data Kategori Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriAset  $kategoriAset
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriAset $kategoriAset)
    {
        //
    }
}
