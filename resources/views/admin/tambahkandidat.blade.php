@extends('template.template')
@section('content')
<?php
    $title = 'Tambah Data Kandidat';
    $page = 'datakandidat';
    ?>
<link id="pagestyle" href="../asset/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

<div class="content">
    <div class="col">
        {{-- <h2>Halaman Data User</h2> --}}
    </div>
    <form action="/add-kandidat" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Ketua Osis</label>
                    <input type="text"
                        class="form-control border border-dark bg-light @error('nama_ketos') is-invalid @enderror"
                        id="name" name="nama_ketos" placeholder="Nama Ketua Osis" autofocus value="{{ old('nama_ketos') }}">
                    @error('nama_ketos')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kelas Ketua Osis</label>
                    <select class="form-control border border-dark bg-light" id="kelas" name="kelas_ketos"
                        value="{{ old('kelas_ketos') }}">
                        <option value="XI PPLG 1">XI PPLG 1</option>
                        <option value="XI PPLG 2">XI PPLG 2</option>
                        <option value="XI PPLG 3">XI PPLG 3</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Wakil Ketua Osis</label>
                    <input type="text"
                        class="form-control border border-dark bg-light @error('nama_waketos') is-invalid @enderror"
                        id="name" name="nama_waketos" placeholder="Nama Wakil Ketua Osis" autofocus value="{{ old('nama_waketos') }}">
                    @error('nama_waketos')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kelas Wakil Ketua Osis</label>
                    <select class="form-control border border-dark bg-light" id="kelas" name="kelas_waketos"
                        value="{{ old('kelas_waketos') }}">
                        <option value=" XI PPLG 1">XI PPLG 1</option>
                        <option value="XI PPLG 2">XI PPLG 2</option>
                        <option value="XI PPLG 3">XI PPLG 3</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Visi</label>
            <textarea class="form-control border border-dark bg-light @error('visi') is-invalid @enderror"
                placeholder="Visi" id="floatingTextarea2" style="height: 100px" name="visi">{{ old('visi') }}</textarea>
            @error('visi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="exampleFormControlInput1">Misi</label>
            <textarea class="form-control border border-dark bg-light @error('misi') is-invalid @enderror"
                placeholder="Misi" id="floatingTextarea2" style="height: 100px" name="misi">{{ old('misi') }}</textarea>
            @error('misi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <label for="exampleFormControlInput1">Foto Kandidat</label>
        <div class="input-group mb-3 border border-dark bg-light rounded">
            <div class="mb-4 d-flex justify-content-center">
                <img id="foto-preview" class="img-preview img-fluid" style="max-width: 200px; max-height: 200px;" />
            </div>
            <div class="mb-4 mx-3">
                <input class="form-control @error('foto_kandidat') is-invalid @enderror border border-dark bg-light my-3"
                    type="file" name="foto_kandidat" id="foto-kandidat" onchange="previewImage('foto-kandidat', 'foto-preview')">
                @error('foto_kandidat')
                <div class="invalid-feedback mb-3">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="exampleFormControlInput1">Fotoprofil Ketua Osis</label>
                <div class="input-group mb-3 border border-dark bg-light rounded">
                    <div class="mb-4 d-flex justify-content-center">
                        <img id="ketos-preview" class="img-preview img-fluid" style="max-width: 200px; max-height: 200px;" />
                    </div>
                    <div class="mb-4 mx-3">
                        <input class="form-control @error('fotoprofil_ketos') is-invalid @enderror border border-dark bg-light my-3"
                            type="file" name="fotoprofil_ketos" id="ketos-foto" onchange="previewImage('ketos-foto', 'ketos-preview')">
                        @error('fotoprofil_ketos')
                        <div class="invalid-feedback mb-3">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <label for="exampleFormControlInput1">Fotoprofil Wakil Ketua Osis</label>
                <div class="input-group mb-3 border border-dark bg-light rounded">
                    <div class="mb-4 d-flex justify-content-center">
                        <img id="waketos-preview" class="img-preview img-fluid" style="max-width: 200px; max-height: 200px;" />
                    </div>
                    <div class="mb-4 mx-3">
                        <input class="form-control @error('fotoprofil_waketos') is-invalid @enderror border border-dark bg-light my-3"
                            type="file" name="fotoprofil_waketos" id="waketos-foto" onchange="previewImage('waketos-foto', 'waketos-preview')">
                        @error('fotoprofil_waketos')
                        <div class="invalid-feedback mb-3">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>


    </form>
</div>
<script>
    // Menangkap elemen label dan input file
    const fileLabel = document.getElementById('fileLabel');
    const inputFile = document.getElementById('inputGroupFile01');

    // Menambahkan event listener pada input file
    inputFile.addEventListener('change', function() {
        // Memperbarui teks label dengan nama file yang diunggah
        fileLabel.textContent = inputFile.files[0].name;
    });

</script>
<script>
function previewImage(inputId, previewId) {
  const image = document.querySelector(`#${inputId}`);
  const imgPreview = document.querySelector(`#${previewId}`);

  imgPreview.style.display = 'block';

  const oFReader = new FileReader();
  oFReader.readAsDataURL(image.files[0]);

  oFReader.onload = function(oFREvent) {
    imgPreview.src = oFREvent.target.result;
  }
}

</script>
@endsection