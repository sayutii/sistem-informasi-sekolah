<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputnilaiController extends Controller
{
    public function index()
    {
        $data_siswa = \App\Siswa::all();
        return view('siswa.nilai',['data_siswa' => $data_siswa]);
        //return view('siswa.nilai');
    }

    public function input($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('siswa.inputnilai',['siswa' => $siswa]);
    }
}
