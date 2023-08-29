<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->segment(2),
            'password' => 'required|numeric|min:10|unique:users,password' . $this->segment(2),
            'nis' => 'required|numeric|min:10|unique:users,nis' . $this->segment(2),
            'kelas' => 'required',
            'level' => 'required',
            'jk' => 'required|in:Laki-laki,Perempuan',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Kolom nama harus diisi',
            'name.string' => 'Kolom nama harus berupa teks',
            'name.max' => 'Kolom nama tidak boleh lebih dari :max karakter',
            'email.required' => 'Kolom email harus diisi',
            'email.email' => 'Kolom email harus berupa alamat email yang valid',
            'email.unique' => 'Alamat email sudah digunakan oleh pengguna lain',
            'password.required' => 'Kolom password harus diisi',
            'password.numeric' => 'Kolom password harus berupa angka',
            'password.min' => 'Kolom password minimal harus 10 karakter',
            'password.unique' => 'Password sudah digunakan oleh pengguna lain',
            'nis.required' => 'Kolom NIS harus diisi',
            'nis.numeric' => 'Kolom NIS harus berupa angka',
            'nis.min' => 'Kolom NIS minimal harus 10 karakter',
            'nis.unique' => 'NIS sudah digunakan oleh pengguna lain',
            'kelas.required' => 'Kolom kelas harus diisi',
            'level.required' => 'Kolom level harus diisi',
            'jk.required' => 'Kolom jenis kelamin harus diisi',
            'jk.in' => 'Kolom jenis kelamin tidak valid',
        ];
    }
}
