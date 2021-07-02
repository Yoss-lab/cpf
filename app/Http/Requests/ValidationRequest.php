<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationRequest extends FormRequest
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
            'nom' => 'required|min:3|max:20|alpha',
            'prenom' => 'required|min:3|max:20|alpha',
            'type' => 'required',
            'genre' => 'required',
            'prix' => 'required|digits_between:1,6',
            'categorie' => 'required',
            'description' => 'required',
            'module1' => 'required',
            'module2' => 'required',
            'module3' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
            'pdf' => 'required|mimes:pdf',
            'titre' => 'required|min:3|max:60',
            'dat_naiss' => 'required|after:today',
            'cin' => 'required|digits_between:8,8',
            'tel' => 'required|digits_between:8,8',
            'email' => 'required|email',
            'password' => 'required',
		
        ];
    }
}
