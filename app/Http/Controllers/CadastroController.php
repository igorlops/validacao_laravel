<?php

namespace App\Http\Controllers;

use App\Http\Requests\CursoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CadastroController extends Controller
{
    public function store(CursoRequest $request)
    {
        // No novo metodo gerado pelo CursoRequest não precisamos passar nada
        // Ele já valida sozinho

        // Metodo Request padrão
        // $request->validate(
        //     [
        //     "curso"=> ['required','max:100'],
        //     "carga"=>['required','integer']
        //     ]
        // );
        // dd($request->all());
        // Validator::make(
        //     $request->except('_token'),
        //     [
        //         "curso"=> ['required','max:100'],
        //         "carga"=>['required','integer']
        //     ],
        // )->validate();

        // if($validacao->fails())
        // {
        //     return redirect()->back()->withInput()->withErrors($validacao);
        // }
            dd('Validção passou');

    }

    public function storeAPI(Request $request)
    {
        $dados = $request->all();

        $validacao = Validator::make(
            $dados,
            [
                "curso" => ['required', 'max:100'],
                "carga"=>['required', 'integer']
            ]
        );
        if($validacao->fails())
        {
            $erros = $validacao->errors();
            return $erros->all();
        }
        dd("Passou na validação");
    }
}
