<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KomponenDana;

class KomponenDanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['KomponenDana'] = KomponenDana::where('keterangan','pendapatan')->orderBy('kode_komponen','ASC')->get();
        return view('komponendana.index',$data);
    }

    function cari()
    {
        $keyword = $_GET['term'];
        if(\Request::segment(4)=='pendapatan')
        {
            $komponen = KomponenDana::select('nama_komponen')
                    ->where('keterangan',\Request::segment(4))
                    ->where('nama_komponen','like',"%$keyword%")
                    ->whereRaw('length(kode_komponen)>4')
                    ->orWhere('kode_komponen','00')
                    ->get();
        }else
        {
            $komponen = KomponenDana::select('nama_komponen')
                    ->where('keterangan',\Request::segment(4))
                    ->where('nama_komponen','like',"%$keyword%")
                    ->whereRaw('length(kode_komponen)>4')
                    ->get();
        }
        
        foreach($komponen as $row){
            $data[] = $row->nama_komponen;
        }
        return json_encode($data);
    }


    function realisasi()
    {
        $data['KomponenDana'] = KomponenDana::where('keterangan','realisasi')->orderBy('kode_komponen','ASC')->get();
        return view('komponendana.realisasi',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['penduduk'] = \App\Models\Penduduk::all();
        return view('komponendana.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'required' => 'Data :attribute Tidak Boleh Ada Yang Kosong',
        ];

        $request->validate([
             'nama_komponen' => 'required',
             'kode_komponen' => 'required',
             'keterangan'        => 'required'
        ],$message);

        KomponenDana::create($request->all());
            return redirect('admin/komponendana')->with('message','Komponen Dana Berhasil Ditambahkan');
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
        $data['komponendana'] = KomponenDana::where('kode_komponen',$id)->first();
        return view('komponendana.edit',$data);
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
        $message = [
            'required' => 'Data :attribute Tidak Boleh Ada Yang Kosong',
        ];

        $request->validate([
             'nama_komponen' => 'required',
             'kode_komponen' => 'required',
             'keterangan'        => 'required'
        ],$message);

        $KomponenDana = KomponenDana::where('kode_komponen',$id);
        $KomponenDana->update($request->all('kode_komponen','nama_komponen','keterangan'));
        $redirectPath = $request->keterangan=='pendapatan'?'/admin/komponendana':'/admin/komponendana/realisasi';
        return redirect($redirectPath)->with('message','Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::table('komponen_dana')->where('kode_komponen',$id)->delete(); 
        return redirect('admin/komponendana')->with('message','A KomponenDana Has Deleted');
    }
}
