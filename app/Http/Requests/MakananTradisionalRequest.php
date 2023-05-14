<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MakananTradisionalRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'jenis_makanan' => 'required',
            'asal_daerah' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'jenis_makanan.required' => 'Jenis Makanan tidak boleh kosong',
            'asal_daerah.required' => 'Asal Daerah tidak boleh kosong',
        ];
    }
}
