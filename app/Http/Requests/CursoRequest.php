<?php

namespace App\Http\Requests;

use App\Rules\CursoPHP;
use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
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
            // "curso"=> ['required','max:100',function($atributo,$valor,$falhou){
            //     if($valor == 'PHP') {
            //         $falhou('Erro, o campo '.$atributo. ' não pode ter o valor PHP');
            //     }
            // }],
            "curso"=> ['required','max:100',new CursoPHP],
            "carga"=>['required','integer']
        ];
    }
}
