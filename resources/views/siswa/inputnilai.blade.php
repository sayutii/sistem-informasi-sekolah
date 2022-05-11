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
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card card">
                                <div class="box bg-cyan text-center">
                                    <h4 class="text-white text-left">Show Nilai</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Data Diri Siswa</h5>
                                <table class="table">
                                    {{-- <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                      </tr>
                                    </thead> --}}
                                    <tbody>
                                      <tr>
                                        <th scope="row">Nama</th>
                                        <td></td>
                                        <td>:</td>
                                        <td>{{$siswa->nama}}</td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Jenis Kelamin</th>
                                        <td></td>
                                        <td>:</td>
                                        <td>{{$siswa->jenis_kelamin}}</td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Agama</th>
                                        <td></td>
                                        <td>:</td>
                                        <td>{{$siswa->agama}}</td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Alamat</th>
                                        <td></td>
                                        <td>:</td>
                                        <td>{{$siswa->alamat}}</td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                    </tbody>
                              </table>
                              <div class="card-body text-right">
                                <button type="button" class="btn btn-warning margin-5 text-white" data-toggle="modal" data-target="#Modal2">
                                    Alert
                                </button>
                              </div>
                              <!-- Button trigger modal -->
                                {{-- <button type="button" class="btn btn-warning margin-5 text-white" data-toggle="modal" data-target="#Modal2">
                                    Alert
                                </button> --}}
                              <table class="table table-bordered">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Semester</th>
                                    <th scope="col">Nilai</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach ($siswa->mapel as $mapel)
                                  <tr>
                                    <th scope="row">{{$mapel->kode}}</th>
                                    <td>{{$mapel->nama}}</td>
                                    <td>{{$mapel->semester}}</td>
                                    <td>{{$mapel->pivot->nilai}}</td>
                                  </tr>
                                @endforeach
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Alert Model</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
@endsection