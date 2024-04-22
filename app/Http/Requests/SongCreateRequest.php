<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SongCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"=>"required|string",
            "year"=>"required|integer",
            "img"=>"required|image",
        ];
    }

    public function messages(){
        return [
            "name.required" => "Non hai inserito correttamente il nome della canzone preferita!",
            "year.required" => "Non hai inserito correttamente l'anno di uscita della tua canzone preferita!",
            "img.required" => "Non hai inserito correttamente la copertina dell'album della tua canzone preferita!",
        ];
    

    }
}
