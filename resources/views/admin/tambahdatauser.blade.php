@extends('template.template')
@section('content')
    <?php
    $title = 'Tambah Data User';
    $page = 'datauser';
    ?>
  <link id="pagestyle" href="../asset/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
    
<div class="content">
    <div class="col">
        {{-- <h2>Halaman Data User</h2> --}}
    </div>
    <form action="/add-user" method="post">
    @csrf
          <div class="form-group">
            <label for="exampleFormControlInput1">Nama</label>
            <input type="text" class="form-control border border-dark bg-light @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nama" autofocus value="{{ old('name') }}">
            @error('name')                
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="email" class="form-control border border-dark bg-light @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
            @error('email')                
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Password</label>
            <input type="text" class="form-control border border-dark bg-light @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" value="{{ old('nis') }}">
            @error('password')                
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
          </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Kelas</label>
                <select class="form-control border border-dark bg-light" id="kelas" name="kelas" value="{{ old('kelas') }}"">
                <option value="XI PPLG 1">XI PPLG 1</option>
                <option value="XI PPLG 2">XI PPLG 2</option>
                <option value="XI PPLG 3">XI PPLG 3</option>
                </select>
            </div>
            <input type="hidden" name="level" value="siswa">
            <div class="form-group">
                <label for="exampleFormControlInput1">NIS</label>
                <input type="string" class="form-control border border-dark bg-light @error('nis') is-invalid @enderror" id="nis" name="nis" placeholder="NIS" value="{{ old('nis') }}">
            @error('nis')                
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                <select class="form-control border border-dark bg-light" id="jk" name="jk" value="{{ old('jk') }}"">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection