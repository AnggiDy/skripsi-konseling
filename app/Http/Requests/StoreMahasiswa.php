<?php

namespace App\Http\Requests;

use App\Mahasiswa;
use Illuminate\Foundation\Http\FormRequest;

class StoreMahasiswa extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $mahasiswa = Mahasiswa::find($this->mahasiswa);
    
        $rules = [
            'nama' => 'required',
            'no_telp' => 'required|numeric',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'prodi' => 'required',
            'fakultas' => 'required',
            'angkatan' => 'required',
        ];
        if($this->method() == 'POST'){
            $rules += [
                'nrm' => 'required|unique:mahasiswa,nrm',                                        
                'password' => 'required|confirmed',
            ];
        } else {                                
            $rules += [
                'nrm' => 'required|unique:mahasiswa,nrm,' . $mahasiswa->id,                                                                       
            ];            
        }
        return $rules;
    }
}
