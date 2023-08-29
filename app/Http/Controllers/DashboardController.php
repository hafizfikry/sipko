<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use App\Models\User;
use App\Models\Voting;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalSiswa = User::count();
        $hasVote = User::where('has_voted', true)->count();
        $notVote = User::where('has_voted', null)->count();
        $kan = Kandidat::all();
        $jumlahsuara = Voting::with('kandidat')->get();
        return view('index', compact('jumlahsuara', 'kan', 'hasVote','notVote' , 'totalSiswa'));
    }
    public function kandidat()
    {
        return view('siswa.kandidat');
    }
    public function about()
    {
        return view('about');
    }
}
