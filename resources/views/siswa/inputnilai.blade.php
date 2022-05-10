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
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Profil Siswa</h4>
                                <div class="col-md-6 col-lg-12">
                                    <div class="card card-hover">
                                        <div class="box bg-cyan text-center">
                                            {{-- <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1> --}}
                                            <div class="p-2"><img src="{{ asset('dashboard/assets/images/users/1.jpg') }}" alt="user" width="100" class="rounded-circle"></div> 
                                            <h6 class="text-white">Dashboard</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-widgets scrollable">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment m-t-0">
                                    {{-- <div class="p-2"><img src="{{ asset('dashboard/assets/images/users/1.jpg') }}" alt="user" width="50" class="rounded-circle"></div> --}}
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">James Anderson</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                        <div class="comment-footer">
                                            {{-- <span class="text-muted float-right">April 14, 2016</span>  --}}
                                            <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                            <button type="button" class="btn btn-success btn-sm">Publish</button>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- column -->

                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">One third width</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection