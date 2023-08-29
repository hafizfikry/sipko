@extends('template.template')
@section('content')
<?php
    $title = 'Tambah Data Kandidat';
    $page = 'datakandidat';
    ?>
<div class="content">
    <div class="col">
        {{-- <h2>Halaman Data User</h2> --}}
    </div>
    <form action="{{ url('update-kandidat', $kan->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Ketua OSIS</label>
                    <input type="text"
                        class="form-control border border-dark bg-light @error('nama_ketos') is-invalid @enderror" id="name"
                        name="nama_ketos" placeholder="Nama Ketua OSIS" autofocus value="{{ $kan->nama_ketos }}">
                    @error('nama_ketos')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kelas</label>
                    <select class="form-control border border-dark bg-light" id="kelas" name="kelas_ketos"
                        value="{{ $kan->kelas_ketos }}"">
                        <option {{ $kan->kelas_ketos == 'XI PPLG 1' ? 'selected' : '' }}>XI PPLG 1</option>
                        <option {{ $kan->kelas_ketos == 'XI PPLG 2' ? 'selected' : '' }}>XI PPLG 2</option>
                        <option {{ $kan->kelas_ketos == 'XI PPLG 3' ? 'selected' : '' }}>XI PPLG 3</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama</label>
                    <input type="text"
                        class="form-control border border-dark bg-light @error('nama_waketos') is-invalid @enderror" id="name"
                        name="nama_waketos" placeholder="Nama" autofocus value="{{ $kan->nama_waketos }}">
                    @error('nama_waketos')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kelas</label>
                    <select class="form-control border border-dark bg-light" id="kelas" name="kelas_waketos"
                        value="{{ $kan->kelas_waketos }}"">
                        <option {{ $kan->kelas_waketos == 'XI PPLG 1' ? 'selected' : '' }}>XI PPLG 1</option>
                        <option {{ $kan->kelas_waketos == 'XI PPLG 2' ? 'selected' : '' }}>XI PPLG 2</option>
                        <option {{ $kan->kelas_waketos == 'XI PPLG 3' ? 'selected' : '' }}>XI PPLG 3</option>
                    </select>
                </div>
            </div>
        </div>

        <div class=" form-group">
                <label for="exampleFormControlInput1">Visi</label>
                <textarea class="form-control border border-dark bg-light @error('visi') is-invalid @enderror"
                    placeholder="Visi" id="floatingTextarea2" style="height: 100px"
                    name="visi"><?php echo $kan['visi'] ?></textarea>
                @error('visi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="form-group mb-3">
            <label for="exampleFormControlInput1">Misi</label>
            <textarea class="form-control border border-dark bg-light @error('misi') is-invalid @enderror"
                placeholder="Misi" id="floatingTextarea2" style="height: 100px"
                name="misi"><?php echo $kan['misi'] ?></textarea>
            @error('misi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <label for="exampleFormControlInput1">Fotoprofil Kandidat</label>
        <div class="input-group mb-3 rounded border border-dark bg-light">
            <input type="hidden" name="oldImage" value="{{ $kan->foto_kandidat }}">
            @if($kan->foto_kandidat)
            <div class="mb-4 d-flex justify-content-center">
                <img src="{{ asset('storage/' . $kan->foto_kandidat) }}" id="img-preview"
                    class="img-preview img-fluid" style="max-width: 200px; max-height: 200px;" />
            </div>
            @else
            <div class="mb-4 d-flex justify-content-center">
                <img id="foto-preview" class="img-preview img-fluid"
                    style="max-width: 200px; max-height: 200px;" />
            </div>
            @endif
            <div class="mb-4 mx-3">
                {{-- <img id="img-preview" class="img-preview img-fluid mb-3 col-sm-5"> --}}
                <input class="form-control @error('foto_kandidat') is-invalid @enderror border border-dark bg-light my-3"
                    type="file" name="foto_kandidat" id="foto-kandidat" onchange="previewImage('foto-kandidat', 'foto-preview')"
                    value="{{ old($kan->foto_kandidat) }}">
                @error('foto_kandidat')
                <div class="invalid-feedback mb-3">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="exampleFormControlInput1">Fotoprofil Ketua OSIS</label>
                <div class="input-group mb-3 rounded border border-dark bg-light">
                    <input type="hidden" name="oldImage" value="{{ $kan->fotoprofil_ketos }}">
                    @if($kan->fotoprofil_ketos)
                    <div class="mb-4 d-flex justify-content-center">
                        <img src="{{ asset('storage/' . $kan->fotoprofil_ketos) }}" id="img-preview" id="img-preview"
                            class="img-preview img-fluid" style="max-width: 200px; max-height: 200px;" />
                    </div>
                    @else
                    <div class="mb-4 d-flex justify-content-center">
                        <img id="ketos-preview" id="img-preview" class="img-preview img-fluid"
                            style="max-width: 200px; max-height: 200px;" />
                    </div>
                    @endif
                    <div class="mb-4 mx-3">
                        {{-- <img id="img-preview" class="img-preview img-fluid mb-3 col-sm-5"> --}}
                        <input class="form-control @error('fotoprofil_ketos') is-invalid @enderror border border-dark bg-light my-3"
                            type="file" name="fotoprofil_ketos" id="ketos-foto" onchange="previewImage('ketos-foto', 'ketos-preview')"
                            value="{{ old($kan->fotoprofil_ketos) }}">
                        @error('fotoprofil_ketos')
                        <div class="invalid-feedback mb-3">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <label for="exampleFormControlInput1">Fotoprofil Wakil Ketua OSIS</label>
                <div class="input-group mb-3 rounded border border-dark bg-light">
                    <input type="hidden" name="oldImage" value="{{ $kan->fotoprofil_waketos }}">
                    @if($kan->fotoprofil_waketos)
                    <div class="mb-4 d-flex justify-content-center">
                        <img src="{{ asset('storage/' . $kan->fotoprofil_waketos) }}" id="img-preview" id="img-preview"
                            class="img-preview img-fluid" style="max-width: 200px; max-height: 200px;" />
                    </div>
                    @else
                    <div class="mb-4 d-flex justify-content-center">
                        <img id="waketos-preview" id="img-preview" class="img-preview img-fluid"
                            style="max-width: 200px; max-height: 200px;" />
                    </div>
                    @endif
                    <div class="mb-4 mx-3">
                        {{-- <img id="img-preview" class="img-preview img-fluid mb-3 col-sm-5"> --}}
                        <input class="form-control @error('fotoprofil_waketos') is-invalid @enderror border border-dark bg-light my-3"
                            type="file" name="fotoprofil_waketos" id="waketos-foto" onchange="previewImage('waketos-foto', 'waketos-preview')"
                            value="{{ old($kan->fotoprofil_waketos) }}">
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