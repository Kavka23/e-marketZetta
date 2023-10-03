<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorepembelianRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'kode_masuk' => 'required',
            'tanggal_masuk' => 'required',
            'totalHarga' => 'required',
            'pemasok_id' => 'required',
            'barang_id' => 'required',
            'harga_beli' => 'required',
            'jumlah' => 'required',
            'sub_total' => 'required',
        ];
    }
}
