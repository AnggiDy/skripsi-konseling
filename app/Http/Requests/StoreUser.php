<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;

class StoreUser extends FormRequest
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
        $user = User::find($this->user);
    
        $rules = [
            'nama' => 'required',
            'no_telp' => 'required|numeric',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'role' => 'required',
            'status' => 'required',        
        ];
        if($this->method() == 'POST'){
            $rules += [
                'username' => 'required|unique:users,username',                                        
                'password' => 'required',                                      
            ];
        } else {                                
            $rules += [
                'username' => 'required|unique:users,username,' . $user->id,                                                                       
            ];            
        }
        return $rules;
    }
}
