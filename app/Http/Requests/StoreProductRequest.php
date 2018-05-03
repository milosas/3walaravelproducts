<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'photo' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ];
    }
    public function messages(){
      return [
      'name.required' => 'VARDAS BUTINAS!!!',
      'description.required' => 'Apibudinimas BUTINAS!!!',
      'photo.required' => 'FOTO BUTINA!!!',
      'price.required' => 'Kaina BUTINA!!!',
      'quantity.required' => 'Kiekis BUTINAS!!!'
      ];
    }
}
