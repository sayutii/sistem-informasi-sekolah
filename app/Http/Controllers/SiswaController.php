<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SiswaController extends Controller
{
    public function index()
    {
        $data_siswa = \App\Siswa::all();
        return view('siswa.index',['data_siswa' => $data_siswa]);
    }

    public function add()
    {
        return view('siswa.add');
    }

    public function create(Request $request)
    {

        $user = new \App\User;
        $user->role = 'siswa';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->nisn = $request->nisn;
        $user->password = bcrypt('12345');
        $user->remember_token = Str::random(60);
        $user->save();
        
        $request->request->add(['user_id'=> $user->id]);
        $siswa = \App\Siswa::create($request->all()); 
        return redirect('siswa')->with('sukses','Data Berhasil Disimpan');
    }

    // public function edit($id)
    // {
    //     $siswa = \App\Siswa::find($id);
    //     dd($siswa);
    //     // return view('siswa.edit');
    // }
    public function update(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->update($request->all());
        return redirect('siswa')->with('ubah','Data Berhasil Diubah');
    }

    public function delete($id)
    {
        // $siswa = \App\Siswa::find($id);
        // $siswa->delete($siswa);
        // return redirect('siswa');
        DB::table('siswa')->where('id',$id)->delete();
        return redirect()->back()->with('hapus','Data Berhasil Di Hapus');
    }
}
