<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtKandidat = Kandidat::all();
        return view('admin.datakandidat', compact('dtKandidat'));
    }

    public function detail($id)
    {
        $kan = Kandidat::findorfail($id);
        return view('admin.detail-kandidat-admin', compact('kan'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dtKandidat = Kandidat::all();
        return view('admin.tambahkandidat', compact('dtKandidat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('fotoprofil')->store('img');

        $validated = $request->validate([
            'nama_ketos' => 'required|unique:kandidats',
            'nama_waketos' => 'required|unique:kandidats',
            'kelas_ketos' => 'required',
            'kelas_waketos' => 'required',
            'visi' => 'required|unique:kandidats',
            'misi' => 'required|unique:kandidats',
            'fotoprofil_ketos' => 'image|max:2048',
            'fotoprofil_waketos' => 'image|max:2048',
            'foto_kandidat' => 'image|max:2048',
        ], [

            'nama_kandidat.required' => 'Kolom Nama Kandidat harus diisi!',
            'nama_kandidat.unique' => 'Nama Kandidat sudah digunakan',
            'kelas_kandidat.required' => 'Kolom Kelas Kandidat harus diisi!',
            'visi.required' => 'Kolom Visi harus diisi!',
            'visi.unique' => 'Visi tersebut sudah digunakan',
            'misi.required' => 'Kolom Misi harus diisi!',
            'misi.unique' => 'Misi tersebut sudah digunakan',
            'fotoprofil_ketos.required' => 'Fotoprofil harus diisi!',
            'fotoprofil_waketos.required' => 'Fotoprofil harus diisi!',
            'foto_kandidat.required' => 'Fotoprofil harus diisi!',
            'fotoprofil_ketos.image' => 'Fotoprofil harus berupa gambar!',
            'fotoprofil_waketos.image' => 'Fotoprofil harus berupa gambar!',
            'foto_kandidat.image' => 'Fotoprofil harus berupa gambar!',
            'fotoprofil_ketos.max' => 'Ukuran Fotoprofil terlalu besar!',
            'fotoprofil_waketos.max' => 'Ukuran Fotoprofil terlalu besar!',
            'foto_kandidat.max' => 'Ukuran Fotoprofil terlalu besar!',
        ]);

        $validated['foto_kandidat'] = $request->file('foto_kandidat')->store('img');
        $validated['fotoprofil_ketos'] = $request->file('fotoprofil_ketos')->store('img');
        $validated['fotoprofil_waketos'] = $request->file('fotoprofil_waketos')->store('img');

           Kandidat::create($validated);

        return redirect('/datakandidat')->with('success', 'Data Kandidat berhasil ditambahkan!');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kan = Kandidat::findorfail($id);
        return view('admin.editkandidat', compact('kan'));
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
        $kan = Kandidat::findorfail($id);
        $validated = $request->validate([
            'nama_ketos' => 'required',
            'kelas_ketos' => 'required',
            'nama_waketos' => 'required',
            'kelas_waketos' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'fotoprofil_ketos' => 'nullable|image|max:2048',
            'fotoprofil_waketos' => 'nullable|image|max:2048',
            'foto_kandidat' => 'nullable|image|max:2048',
        ], [

            'nama_kandidat.required' => 'Kolom Nama Kandidat harus diisi!',
            'kandidat_kandidat.required' => 'Kolom Kelas Kandidat harus diisi!',
            'visi.required' => 'Kolom Visi harus diisi!',
            'misi.required' => 'Kolom Misi harus diisi!',
            // 'fotoprofil.required' => 'Fotoprofil harus diisi!',
            'fotoprofil_ketos.image' => 'Fotoprofil harus berupa gambar!',
            'fotoprofil_waketos.image' => 'Fotoprofil harus berupa gambar!',
            'foto_kandidat.image' => 'Fotoprofil harus berupa gambar!',
            'fotoprofil_ketos.max' => 'Ukuran Fotoprofil terlalu besar!',
            'fotoprofil_waketos.max' => 'Ukuran Fotoprofil terlalu besar!',
            'foto_kandidat.max' => 'Ukuran Fotoprofil terlalu besar!',
        ]);

        
        if($request->file('foto_kandidat')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validated['foto_kandidat'] = $request->file('foto_kandidat')->store('img');
        }
        if($request->file('fotoprofil_ketos')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validated['fotoprofil_ketos'] = $request->file('fotoprofil_ketos')->store('img');
        }
        if($request->file('fotoprofil_waketos')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validated['fotoprofil_waketos'] = $request->file('fotoprofil_waketos')->store('img');
        }
        $kan->update($validated);
        // $kan->update($request->all());
        return redirect('datakandidat')->with('success', 'Data berhasil diubah');
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
        $kan = Kandidat::findorfail($id);
        if($kan->foto_kandidat){
            Storage::delete($kan->foto_kandidat);
        }
        if($kan->fotoprofil_ketos){
            Storage::delete($kan->fotoprofil_ketos);
        }
        if($kan->fotoprofil_waketos){
            Storage::delete($kan->fotoprofil_waketos);
        }
        $kan->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
