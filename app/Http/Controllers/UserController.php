<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Imports\SiswaImport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminare\Support\Collection;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\UpdateDataRequest;
use RealRashid\SweetAlert\Facades\Alert;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataSiswa = User::orderBy('kelas', 'asc')->paginate(5);
        return view('admin.datauser', compact('dataSiswa'));
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $dataSiswa = User::where('name', 'like', "%" . $keyword . "%")->paginate(5);
        return view('admin.datauser', compact('dataSiswa'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function cetakPDF()
    {
        $users = User::all();

        $pdf = Pdf::loadView('admin/pdf', compact('users'));
        return $pdf->download('laporan-siswa.pdf');
    }

    // Import Excel
    public function importexcel(Request $request)
    {
        // Validasi form upload Excel
        $request->validate([
            'file' => 'required|mimes:xls,xlsx,csv|max:2048'
        ], [
            'file.required' => Alert::error('Mohon maaf', 'file yang anda masukkan tidak sesuai!') 
        ]);
        
        // Ambil file Excel dari form upload
        $file = $request->file('file');
        
        // Baca data Excel menggunakan PhpSpreadsheet
        $reader = new Xlsx();
        $spreadsheet = $reader->load($file);
        $worksheet = $spreadsheet->getActiveSheet();
        
        // Ambil data baris per baris
        $rows = $worksheet->toArray();
        $header = array_shift($rows);
        
        // Proses data baris per baris
        foreach ($rows as $row) {
            $data = array_combine($header, $row);
        
            // Simpan data ke database
            User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'level' => $data['level'],
                'kelas' => $data['kelas'],
                'password' => $data['password'],
                'nis' => $data['nis'],
                'jk' => $data['jk'],
            ]);
        }
        return redirect('datauser')->with('success', 'Import Data Berhasil!');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambahdatauser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'email'=> 'required|email|unique:users',
            'password' => 'required|unique:users|min:10|numeric',
            'level' => 'required',
            'kelas' => 'required',
            'nis' => 'required|unique:users|min:10|numeric',
            'jk' => 'required',
            // 'fotoprofil' => 'nullable'
        ], [
            'name.required' => 'Nama wajib diisi',
            'name.max' => 'Nama maksimal 100 karakter',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah digunakan',
            'password.required' => 'Password wajib diisi',
            'password.unique' => 'Password sudah digunakan',
            'password.min' => 'Password minimal 10 karakter',
            // 'password.max' => 'Password maksimal 10 karakter',
            'password.numeric' => 'Password harus berupa angka',
            'level.required' => 'Level wajib diisi',
            'kelas.required' => 'Kelas wajib diisi',
            'nis.required' => 'NIS wajib diisi',
            'nis.unique' => 'NIS sudah digunakan',
            'nis.min' => 'NIS minimal 10 karakter',
            // 'nis.max' => 'NIS maksimal 10 karakter',
            'nis.numeric' => 'NIS harus berupa angka',
            'jk.required' => 'Jenis Kelamin wajib diisi',

        ]);

        // Enkripsi password menggunakan bcrypt
        $password = bcrypt($request->input('password'));

        // Simpan data pengguna ke database
        $user = new User;
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = $password;
        $user->level = $validatedData['level'];
        $user->kelas = $validatedData['kelas'];
        $user->nis = $validatedData['nis'];
        $user->jk = $validatedData['jk'];
        $user->save();

        return redirect('datauser')->with('success', 'Siswa Berhasil Ditambahkan');
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
        $sis = User::findorfail($id);
        return view('admin.editdatauser', compact('sis'));
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
        $sis = User::findorfail($id);
        $validatedData = $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'password' => 'required|numeric|min:10',
                'nis' => 'required|numeric|min:10',
                'kelas' => 'required',
                'level' => 'required',
                'jk' => 'required|in:Laki-laki,Perempuan',
            ], [
                'name.required' => 'Kolom nama harus diisi',
                'name.string' => 'Kolom nama harus berupa teks',
                'name.max' => 'Kolom nama tidak boleh lebih dari :max karakter',
                'email.required' => 'Kolom email harus diisi',
                'email.email' => 'Kolom email harus berupa alamat email yang valid',
                // 'email.unique' => 'Alamat email sudah digunakan oleh pengguna lain',
                'password.required' => 'Kolom password harus diisi',
                'password.numeric' => 'Kolom password harus berupa angka',
                'password.min' => 'Kolom password minimal harus 10 karakter',
                // 'password.unique' => 'Password sudah digunakan oleh pengguna lain',
                'nis.required' => 'Kolom NIS harus diisi',
                'nis.numeric' => 'Kolom NIS harus berupa angka',
                'nis.min' => 'Kolom NIS minimal harus 10 karakter',
                // 'nis.unique' => 'NIS sudah digunakan oleh pengguna lain',
                'kelas.required' => 'Kolom kelas harus diisi',
                'level.required' => 'Kolom level harus diisi',
                'jk.required' => 'Kolom jenis kelamin harus diisi',
                'jk.in' => 'Kolom jenis kelamin tidak valid',
    
            ]
            );
        $validatedData['password'] = bcrypt($validatedData['password']);
        $sis->update($validatedData);
        // $sis->update($request->all());
        return redirect('datauser')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sis = User::findorfail($id);
        $sis->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
