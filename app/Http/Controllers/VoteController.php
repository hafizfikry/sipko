<?php

namespace App\Http\Controllers;

use App\Models\Voting;
use App\Models\Kandidat;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtKandidat = Kandidat::all();
        return view('siswa.kandidat', compact('dtKandidat'));
    }

    public function detail($id)
    {
        $kan = Kandidat::findorfail($id);
        return view('siswa.detail-kandidat-siswa', compact('kan'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vote = Voting::all();
        $kan = Kandidat::all();
        return view('siswa.vote', compact('kan', 'vote'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //mengambil id dari kandidat
        $kandidat = Kandidat::findorfail($id);

        // mengecek apakah user telah melakukan voting sebelumnya
        if (auth()->user()->has_voted) {
            Alert::error('Mohon Maaf', 'Anda telah melakukan voting sebelumnya!');
            return redirect('kandidat');
        }

        // Menambahkan vote ke kandidat
        $kandidat->vote++;
        $kandidat->save();


        // menambahkan data ke table voting
        $user = auth()->user();
        $vote = Voting::firstOrCreate(['user_id' => $user->id, 'kandidat_id' => $kandidat->id]);

        // menyimpan status bahwa user telah melakukan voting 
        $user->has_voted = true;
        $user->save();

        Alert::success('Terima kasih', 'Anda telah berhasil melakukan voting');
        return redirect('kandidat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
