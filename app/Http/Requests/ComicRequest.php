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
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:100',
            'thumb' => 'required',
            'price' => 'required',
        ];
    }

    // Funzione per visualizzare i messaggi in italiano
    public function messages(){
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve avere almeno 5 caratteri',
            'title.max' => 'Il titolo è troppo lungo (max 100 caratteri)',
            'thumb.required' => 'Inserisci il percorso dell\'immagine',
            'price.required' => 'Inserisci il prezzo',
        ];
    }
}
