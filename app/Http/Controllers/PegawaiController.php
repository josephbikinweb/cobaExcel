<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

use App\Exports\PegawaiExport;
use App\Imports\PegawaiImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $datas = Pegawai::all();

        return view('pegawai', [
            'title' => 'Pegawai',
            'datas' => $datas,
        ]);
    }
    public function pegawaiExport()
    {
        return Excel::download(new PegawaiExport, 'pegawai.xlsx');
    }

    public function pegawaiImport(Request $request)
    {
        // return $request->all();
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        // Secara otomatis file akan di upload ke folder public dan dibuatkan folder baru employee
        $file->move('data_pegawai', $namaFile);

        Excel::import(new PegawaiImport, public_path('/data_pegawai/' . $namaFile));
        return redirect('/pegawai');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        //
    }
}
