<?php

namespace App\Http\Controllers;

use App\Models\DataOpd;
use Illuminate\Http\Request;

class DataOpdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opds = DataOpd::all();
        return view('dashboard/opd/index', ['opds' => $opds]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/opd/create');
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
            'nama_opd' => 'required',
        ]);

        DataOpd::create([
            'nama_opd' => $request->nama_opd,
        ]);
        return redirect('dashboard/dataopd')->with('status', 'Data OPD Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataOpd  $dataOpd
     * @return \Illuminate\Http\Response
     */
    public function show(DataOpd $dataopd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataOpd  $dataOpd
     * @return \Illuminate\Http\Response
     */
    public function edit(DataOpd $dataopd)
    {
        return view('dashboard/opd/edit', ['dataopd' => $dataopd]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataOpd  $dataOpd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataOpd $dataopd)
    {
        $request->validate([
            'nama_opd' => 'required',
        ]);

        $dataopd->update([
            'nama_opd' => $request->nama_opd,
        ]);
        return redirect('dashboard/dataopd')->with('status', 'Data OPD Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataOpd  $dataOpd
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataOpd $dataopd)
    {
        //
    }
}
