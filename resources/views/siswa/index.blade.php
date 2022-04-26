@extends('layouts.master')
@section('title', 'Siswa')
@section('content')
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Siswa</h4>
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
                                        <a href="/siswa/add" class="btn btn-info bt-sm">Tambah</a>
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
                                                <td><a href="" data-toggle="modal" data-target="#Modal2-{{ $siswa->id }}" class="btn btn-warning bt-sm">Edit</a>
                                                    <a href="#" data-id="{{ $siswa->id }}" class="btn btn-danger bt-sm swal-confirm">
                                                        <form action="{{ route('siswa.delete',$siswa->id) }}" id="delete{{ $siswa->id }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        </form>
                                                        Hapus
                                                    </a>
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

            @foreach ($data_siswa as $siswa)
                
            
            <!-- Modal -->
            <div class="modal fade" id="Modal2-{{ $siswa->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Data Siswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="/siswa/{{$siswa->id}}/update" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Nama</label>
                                <input name="nama" type="text" class="form-control" placeholder="Nama" value="{{$siswa->nama}}">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                    <select class="select2 form-control custom-select" name="jenis_kelamin" style="width: 100%; height:36px;" value="{{$siswa->jenis_kelamin}}">
                                        <option>Pilih...</option>
                                        {{-- <optgroup label="Alaskan/Hawaiian Time Zone"> --}}
                                        <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                                        <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                                        {{-- </optgroup> --}}
                                    </select>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                    <select class="select2 form-control custom-select" name="agama" style="width: 100%; height:36px;">
                                        <option>Pilih...</option>
                                        {{-- <optgroup label="Alaskan/Hawaiian Time Zone"> --}}
                                        <option @if($siswa->agama == 'Islam') selected @endif>Islam</option>
                                        <option @if($siswa->agama == 'Kristen') selected @endif>Kristen</option>
                                        <option @if($siswa->agama == 'Hindu') selected @endif>Hindu</option>
                                        <option @if($siswa->agama == 'Budha') selected @endif>Budha</option>
                                        <option @if($siswa->agama == 'Konghucu') selected @endif>Konghucu</option>
                                        {{-- </optgroup> --}}
                                    </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control">{{$siswa->alamat}}</textarea>
                            </div>
                            {{-- <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" placeholder="Jenis Kelamin">
                            </div> --}}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Ubah</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>   
            @endforeach         
@endsection

@push('page-scripts')
    @if (Session::has('sukses'))
        <script>
            toastr.success("{{ Session::get('sukses') }}");
        </script>

    @endif
    @if (Session::has('ubah'))
        <script>
            toastr.info("{{ Session::get('ubah') }}");
        </script>
    @endif
    @if (Session::has('hapus'))
        <script>
            toastr.error("{{ Session::get('hapus') }}");
        </script>
    @endif
    <script>
        $(".swal-confirm").click(function(e) {
            id = e.target.dataset.id;
            swal({
                title: "Hapus Data Ini?",
                text: "Anda tidak akan dapat melihat data ini lagi!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    swal("Poof! Data Siswa ini telah di hapus!!", {
                    icon: "success",
                    });
                    $(`#delete${id}`).submit();
                } else {
                    swal("Data ini aman!");
                }
                });
        });
    </script>
@endpush