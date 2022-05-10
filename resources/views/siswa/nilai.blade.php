@extends('layouts.master')
@section('title', 'Siswa')
@section('content')
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Input Nilai Siswa</h4>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-12 d-flex no-block align-items-center">
                                    <h4 class="page-title">Data Siswa Sekolah Dasar</h4>
                                    <div class="ml-auto text-right">
                                        {{-- <button type="button" class="btn btn-warning margin-5 text-white" data-toggle="modal" data-target="#Modal2">
                                            Tambah
                                        </button> --}}
                                        {{-- <a href="/siswa/add" class="btn m-t-20 btn-info btn-block waves-effect waves-light">
                                            <i class="ti-plus"></i> Add New Event
                                        </a> --}}
                                        {{-- <a href="/siswa/add" class="btn btn-info bt-sm">Tambah</a> --}}
                                    </div>
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Agama</th>
                                                <th>Alamat</th>
                                                <th>Aksi</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data_siswa as $siswa)
                                            <tr>
                                                <td>{{$siswa->nama}}</td>
                                                <td>{{$siswa->jenis_kelamin}}</td>
                                                <td>{{$siswa->agama}}</td>
                                                <td>{{$siswa->alamat}}</td>
                                                <td><a href="/nilai/{{ $siswa->id }}/input" class="btn btn-primary bt-sm">Pilih</a>
                                                </td>
                                                <td>$320,800</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

@endsection

