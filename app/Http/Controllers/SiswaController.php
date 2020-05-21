<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['siswa'] = \DB::table('t_siswa')->get();
        return view('belajar',$data);
       
    }

    public function start()
    {
        return view('welcome');
    }

    public function algo()
    {
        $data['nama'] = "Algo";
        $data['sekolah'] = "SMKN 4 Bandung";
        return view('algo',$data);
    }

    public function aguscik()
    {
        $data['nama'] = "Algo";
        $data['jurusan'] = "Rekayasa Perangkat Lunak";
        return view('aguscik',compact('data'));
    }

    public function bermain($value='')
    {
        $data1 = "Algo Aguscik";
        $data2 = "Bandung";

        return view('bermain',compact('data1','data2'));
    }


    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $rule = [
            'nis' => 'required|numeric|unique:t_siswa',
            'namalengkap' => 'required|string',
            'jenkel' => 'required',
            'golongan_darah' => 'required'
        ];
        $this->validate($request,$rule);
        unset($input['_token']);
        $status = \DB::table('t_siswa')->insert($input);
        if($status){
            return redirect('/siswa')->with('success','Data Berhasil Ditambahkan');
        }else{
            return redirect('/siswa/create')->with('error','Data Gagal Ditambahkan');
        }
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
