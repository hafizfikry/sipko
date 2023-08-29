@extends('template.template')
@section('content')
<?php
    $title = 'Vote Kandidat';
    $page = 'kandidat';
    ?>
<div class="content">
    <div class="col text-center">
        <h2>Voting Kandidat Pilihanmu dengan <b>BIJAK!</b></h2>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 my-3">
        @foreach ($dtKandidat as $kandidat)
        <div class="col">
            <div class="card h-100  border border-success">
                <img src="{{ asset('storage/' . $kandidat->foto_kandidat) }}" class="card-img-top" alt="..." height="300">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-center">Kandidat {{ $loop->iteration }}</h5>
                    <div class="mt-auto">
                        @if (auth()->user()->level=="siswa")
                        {{-- <form action="{{ url('vote/' . $kandidat->id) }}" method="post">
                            @csrf
                        </form> --}}
                        <a class="btn btn-warning text-light rounded-pill my-2 w-100 p-3" data-id="{{ $kandidat->id }}" data-toggle="modal" data-target="#exampleModal{{ $kandidat->id }}">Vote</a>
                        @endif
                        <a class="btn btn-success rounded-pill w-100 p-3" href="{{ url('detail-kandidat',$kandidat->id) }}" role="button">Detail</a>
                    </div>
                </div>
            </div>
        </div>
                {{-- Modal Delete --}}
                <div class="modal fade" id="exampleModal{{ $kandidat->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <form action="{{ url('vote/' . $kandidat->id) }}" method="post">
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                                    @csrf
                                    <button type="submit" class="btn btn-success">Vote</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
</div>
@if(session('error'))
<script>
    Swal.fire({
        icon: 'error'
        , title: 'Oops...'
        , text: '{{ session('
        error ') }}'
    , });

</script>
@endif
@include('sweetalert::alert')
@endsection
