@extends('template.template')
@section('content')
<?php
    $title = 'Data User';
    $page = 'datauser';
    ?>
<link id="pagestyle" href="../asset/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

<div class="content">
    <div class="col">
        {{-- <h2>Halaman Data User</h2> --}}
    </div>
    <nav class="navbar bg-body-tertiary bg-light rounded border border-success">
        <div class="container-fluid">
            <a class="navbar-brand">
                <form action="{{ route('search') }}" method="GET">
                    <input class="btn btn-outline-success btn-sm rounded" type="text" name="search" id="search" placeholder="Cari Siswa .." value="{{ old('cari') }}">
                    <input class="btn btn-outline-success btn-sm rounded" type="submit" value="CARI">
                </form>
            </a>
            <form class="d-flex" role="search">
                <a class="btn btn-outline-danger btn-sm rounded-pill mx-2" type="button" href="/cetak-pdf">Cetak PDF</a>
                <a class="btn btn-outline-warning btn-sm rounded-pill mx-2" type="button" href="tambahuser" data-toggle="modal" data-target="#exampleModalL">Import Excel</a>
                <a class="btn btn-outline-success btn-sm rounded-pill" type="button" href="tambahuser">Tambah Data User</a>
            </form>
        </div>
    </nav>
    <table class="table bg-light border border-success">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Email</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">NIS</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Status</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        @foreach ($dataSiswa as $index => $siswa)
        <tbody>
            <tr>
                <th>{{ $index + $dataSiswa->firstItem() }}</th>
                <td>{{ $siswa->email }}</td>
                <td>{{ $siswa->name }}</td>
                <td>{{ $siswa->kelas }}</td>
                <td>{{ $siswa->nis }}</td>
                <td>{{ $siswa->jk }}</td>
                <td>
                    @if($siswa->has_voted)
                    <a class="btn btn-success rounded text-light">Sudah Voting</a>
                    @else
                    <a class="btn btn-danger rounded text-light">Belum Voting</a>                        
                    @endif
                </td>
                <td>
                    <a class="btn btn-danger text-light rounded mx-1" data-id="{{ $siswa->id }}" data-toggle="modal" data-target="#exampleModal{{ $siswa->id }}">Delete</a>
                    <a class="btn btn-warning rounded" href="{{ url('edituser',$siswa->id) }}">Edit</a>
                </td>
            </tr>
        </tbody>
        {{-- Modal Delete --}}
        <div class="modal fade" id="exampleModal{{ $siswa->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Kandidat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah kamu yakin?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-danger" href="{{ url('del-user',$siswa->id) }}">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        {{-- Modal Import Excel --}}
        <div class="modal fade" id="exampleModalL" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Import data Excel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <b class="mx-3 my-2">Header dari file excel tersebut harus berurutan seperti : </b>
                    <p class="mx-3">name-email-level-kelas-password-nis-jk</p>
                    <form action="/importexcel" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                                <input class="form-control border border-dark bg-light my-3" type="file" name="file" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Import Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </table>
    <div class="footer">
        {{ $dataSiswa->onEachSide(1)->links('pagination::bootstrap-4') }}
    </div>
</div>
@include('sweetalert::alert')
@endsection
