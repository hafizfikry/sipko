@extends('template.template')
@section('content')
<?php
    $title = 'Data Kandidat';
    $page = 'datakandidat';
    ?>
<link id="pagestyle" href="../asset/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

<div class="content">
    <div class="col">
        {{-- <h2>Halaman Data Kandidat</h2> --}}
    </div>
    <nav class="navbar bg-body-tertiary bg-light rounded border border-success">
        <div class="container-fluid">
            <a class="navbar-brand"></a>
            <form class="d-flex" role="search" href="/tambahkandidat">
                <a class="btn btn-outline-success btn-sm rounded-pill" type="button" href="tambah-kandidat">Tambah Data Kandidat</a>
        </div>
    </nav>
      
    <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($dtKandidat as $kandidat)
        <div class="col">
            <div class="card h-100  border border-success">
                <img src="{{ asset('storage/' . $kandidat->foto_kandidat) }}" class="card-img-top" alt="..." height="300">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center">Kandidat {{ $loop->iteration }}</h5>
                    <div class="mt-auto">
                    <a class="btn btn-success rounded-pill w-100 p-3" href="{{ url('detail-kandidat-admin',$kandidat->id) }}" role="button">Detail</a>
                    <a class="btn btn-danger text-light rounded-pill w-100 p-3" data-id="{{ $kandidat->id }}" data-toggle="modal" data-target="#exampleModal{{ $kandidat->id }}">Delete</a>
                </div>
                </div>
            </div>
        </div>

        {{-- Modal Delete --}}
        <div class="modal fade" id="exampleModal{{ $kandidat->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <a class="btn btn-danger" href="{{ url('del-kandidat',$kandidat->id) }}">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
</div>
</div>

</div>
</div>
@include('sweetalert::alert')
@endsection
