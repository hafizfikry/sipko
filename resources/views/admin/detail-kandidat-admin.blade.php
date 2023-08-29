@extends('template.template')
@section('content')
<?php
    $title = 'Detail Data Kandidat';
    $page = 'datakandidat';
    ?>
<div class="content">
    <div class="row justify-content-center my-3">
        {{-- <h2>Halaman Data User</h2> --}}
        <div class="card mx-3" style="width: 18rem;">
            <img src="{{ asset('storage/' . $kan->fotoprofil_ketos) }}" class="card-img-top" alt="..." style="max-height:250px ;">
            <div class="card-body">
                <h5 class="card-title text-center">Ketua OSIS</h5>
            </div>
            <ul class="list-group list-group-flush my-1">
                <li class="list-group-item">Nama    : {{ $kan->nama_ketos }}</li>
                <li class="list-group-item">Kelas   : {{ $kan->kelas_ketos }}</li>
            </ul>
        </div>
        <div class="card mx-3" style="width: 18rem;">
            <img src="{{ asset('storage/' . $kan->fotoprofil_waketos) }}" class="card-img-top" alt="..." style="max-height:250px ;">
            <div class="card-body">
                <h5 class="card-title text-center">Wakil Ketua OSIS</h5>
            </div>
            <ul class="list-group list-group-flush my-1">
                <li class="list-group-item">Nama    : {{ $kan->nama_waketos }}</li>
                <li class="list-group-item">Kelas   : {{ $kan->kelas_waketos }}</li>
            </ul>
        </div>
    </div>
    <div class="card card-auto mb-3 bg-secondary-emphasis mx-auto" style="max-width: 700px;">
        <div class="row g-0 ">
            <div class="card-body">
                {{-- <h5 class="card-title">{{ $kan->nama_kandidat }}</h5> --}}
                {{-- <p class="card-text"><b>Kelas : </b>{{ $kan->kelas_kandidat }}</p> --}}
                <p class="card-text"><b>Visi : </b>{{ $kan->visi }}</p>
                <p class="card-text"><b>Misi : </b>{{ $kan->misi }}</p>
            </div>
            <div class="col mx-3">
                <a class="btn btn-warning rounded-pill btn-md " href="{{ url('edit-kandidat',$kan->id) }}"
                    role="button">Edit</a>
                <a class="btn btn-danger rounded-pill btn-md" href="/datakandidat" role="button">Kembali</a>
            </div>
        </div>
    </div>
</div>
    @endsection