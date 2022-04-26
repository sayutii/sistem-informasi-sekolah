@extends('layouts.master')
@section('title', 'Edit Siswa')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Tambah Siswa</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="/siswa/add/create" method="POST">
                {{csrf_field()}}
                {{-- <h4 class="card-title">Forms Control</h4> --}}
                <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" type="text" class="form-control" placeholder="Nama">
                </div>
                <div class="form-group">
                    <label>NISN</label>
                    <input name="nisn" type="number" class="form-control" placeholder="NISN">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="select2 form-control custom-select" name="jenis_kelamin" style="width: 100%; height:36px;">
                            <option>Pilih...</option>
                            {{-- <optgroup label="Alaskan/Hawaiian Time Zone"> --}}
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                            {{-- </optgroup> --}}
                        </select>
                </div>
                <div class="form-group">
                    <label>Agama</label>
                        <select name="agama" class="select2 form-control custom-select" name="agama" style="width: 100%; height:36px;">
                            <option>Pilih...</option>
                            {{-- <optgroup label="Alaskan/Hawaiian Time Zone"> --}}
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Konghucu</option>
                            {{-- </optgroup> --}}
                        </select>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="emailF" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    {{-- <button type="submit" class="btn btn-success">Save</button>
                    <button type="submit" class="btn btn-primary">Reset</button> --}}
                    <button type="submit" class="btn btn-info">Simpan</button>
                    {{-- <button type="button" href="/siswa" class="btn btn-danger">Cancel</button> --}}
                    <a href="/siswa" class="btn btn-danger">Batal</a>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection