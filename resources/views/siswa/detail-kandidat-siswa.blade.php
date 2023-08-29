@extends('template.template')
@section('content')
<?php
    $title = 'Detail Kandidat';
    $page = 'kandidat';
    ?>
<div class="content">
    <div class="row justify-content-center my-3">
        {{-- <h2>Halaman Data User</h2> --}}
        <div class="card mx-3" style="width: 18rem;">
            <img src="{{ asset('storage/' . $kan->fotoprofil_ketos) }}" class="card-img-top" alt="..."
                style="max-height:250px ;">
            <div class="card-body">
                <h5 class="card-title text-center">Ketua OSIS</h5>
            </div>
            <ul class="list-group list-group-flush my-1">
                <li class="list-group-item">Nama : {{ $kan->nama_ketos }}</li>
                <li class="list-group-item">Kelas : {{ $kan->kelas_ketos }}</li>
            </ul>
        </div>
        <div class="card mx-3" style="width: 18rem;">
            <img src="{{ asset('storage/' . $kan->fotoprofil_waketos) }}" class="card-img-top" alt="..."
                style="max-height:250px ;">
            <div class="card-body">
                <h5 class="card-title text-center">Wakil Ketua OSIS</h5>
            </div>
            <ul class="list-group list-group-flush my-1">
                <li class="list-group-item">Nama : {{ $kan->nama_waketos }}</li>
                <li class="list-group-item">Kelas : {{ $kan->kelas_waketos }}</li>
            </ul>
        </div>
    </div>
    <div class="card card-auto mb-3 bg-secondary-emphasis mx-auto" style="max-width: 700px;">
        <div class="row g-0">
            <div class="card-body">
                {{-- <h5 class="card-title">{{ $kan->nama_kandidat }}</h5> --}}
                {{-- <p class="card-text"><b>Kelas : </b>{{ $kan->kelas_kandidat }}</p> --}}
                <p class="card-text"><b>Visi : </b>{{ $kan->visi }}</p>
                <p class="card-text"><b>Misi : </b>{{ $kan->misi }}</p>
            </div>
            <div class="col mx-3">
                @if (auth()->user()->level=="siswa")
                <form action="{{ url('vote/' . $kan->id) }}" method="post">
                    @csrf
                    <a class="btn btn-warning rounded-pill text-light" data-id="{{ $kan->id }}" data-toggle="modal"
                        data-target="#exampleModal{{ $kan->id }}">Vote</a>
                    @endif
                    <a class="btn btn-danger rounded-pill btn-md" href="/kandidat" role="button">Kembali</a>
                </form>
                {{-- <a role="button" class="btn btn-warning rounded-pill btn-md" href="/vote">Vote</button> --}}
            </div>
        </div>
    </div>
    {{-- Modal --}}
    <div class="modal fade" id="exampleModal{{ $kan->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Voting Ketua OSIS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah kamu yakin?
                </div>
                <div class="modal-footer text-center">
                    <form action="{{ url('vote/' . $kan->id) }}" method="post">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                        @csrf
                        <button type="submit" class="btn btn-success">Vote</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection