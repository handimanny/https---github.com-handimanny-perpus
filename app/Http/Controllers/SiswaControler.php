<?php

namespace App\Http\Controllers;

use App\Exports\SiswaExport;
use App\Models\Sekolah;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Maatwebsite\Excel\Facades\Excel;

class SiswaControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = Siswa::all();
        // dd($data);
        return view('tampil', compact('data'));

        // return view('halaman');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Sekolah::all();
        return view('siswa/buat', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // Siswa::create($request->all());
        // DB::insert('insert into siswa (nama, sekolah_id) values (?, ?)', [$request->nama,$request->sekolah_id]);
        $validator = $request->validate([
            'nama'=> 'required|string',
            'sekolah_id'=> 'required'
        ]);

        Siswa::create($validator);
        
        return redirect('siswa')->with('success', 'Data berhasil masuk');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Siswa::find($id);
        $sekolah = Sekolah::all();

        return view('siswa.edit', compact('data','sekolah'));
        // dd($id);
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
        $data = Siswa::find($id);
        $data->update($request->all());
        return redirect('siswa')->with('success', 'Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Siswa::findOrFail($id);
        $data->delete();
        return redirect('siswa')->with('success', 'Data berhasil dihapus');
    }
    
    // public function wilayah()
    // {
        // $data = Http::get('http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
        // dd($data->json());
    //     dd('aaaa');
    // }

    // https://docs.laravel-excel.com/3.1/getting-started/installation.html laravel excel
    // composer require psr/simple-cache:^2.0 maatwebsite/excel --ignore-platform-req=ext-gd

    public function export()
    {
        return Excel::download(new SiswaExport, 'users.xlsx');
        // return (new SiswaExport)->download('join.xlsx');
        // return (new SiswaExport(2022))->download('invoices.xlsx');
    }
}
