<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormsRequest extends FormRequest
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
        return [
            'unik' => 'string',
            'name' => 'required|string|alpha',
            'nationality' => 'required|string',
            'born_date' =>  'required|string',
            'nik' => 'required|string|min:16|numeric',
            'job' => 'required|string',
            'jenis' => 'required|string',
            'sekolah' => 'required|string',
            'nilai' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string|numeric',
            'address' => 'required|string',
            'pendidikan' => 'required|string',
            'jurusan' => 'required|string',

            //file
            'pas' => 'required|image|max:2048',            
            'cv' => 'required|mimes:pdf|max:2048',
            'ktp' => 'required|image|max:2048',
            'others' => 'mimes:pdf|max:2048',
        
        ];
    }
    public function messages(){
        return [
            'nik.min' => 'No.KTP kurang dari 16 karakter',
            'nik.max' => 'No.KTP lebih dari 16 karakter',
            'nik.numeric' => 'No.KTP hanya diisi dengan angka',
            'name.alpha' => 'Nama hanya diisi dengan huruf',
            'phone.numeric' => 'No.Telp. hanya diisi dengan angka',
            'pas.image' => 'Format pas foto harus jpg/png',
            'pas.max' => 'Ukuran pas foto tidak boleh lebih dari 2Mb',
            'cv.mimes' => 'Format cv harus pdf',
            'cv.max' => 'Ukuran cv tidak boleh lebih dari 2Mb',
            'ktp.image' => 'Format foto ktp harus jpg/png',
            'ktp.max' => 'Ukuran foto ktp tidak boleh lebih dari 2Mb',
            'others.mimes' => 'Format proposal harus pdf',
            'others.max' => 'Ukuran proposal tidak boleh lebih dari 2Mb',            
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
}
