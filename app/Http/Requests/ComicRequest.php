<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{

   
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; 
        //con true autorizziamo tutti
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        
        return [
            'title' => 'required|max:100',
            'description' => 'nullable|max:255',
            'thumb' => 'nullable|max:255',
            'price' => 'required|numeric|decimal:2',
            'series' => 'nullable|max:50',
            'sale_date' => 'nullable|max:10',
            'type' => 'nullable|max:50',
            'artists' => 'nullable|max:255',
            'writers' => 'nullable|max:255'
        ];
    }
}
