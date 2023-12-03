<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CadastroController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $validacao = Validator::make(
            $request->except('_token'),
            [
                "curso"=> ['required','max:100'],
                "carga"=>['required','integer']
            ],
            [

            ]
            );

            if($validacao->fails())
            {
                return redirect()->back()->withInput()->withErrors($validacao);
            }
            dd('Validção passou');

    }
}
