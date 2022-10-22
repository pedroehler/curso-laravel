<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                    'nome' => 'Fornecedor 1',
                    'status' => 'N',
                    'cnpj' => '00.000.000/0000-00',
                    'ddd' => '11',
                    'telefone' => '4357-8927'
            ],
            1 => [
                    'nome' => 'Fornecedor 2',
                    'status' => 'S',
                    'cnpj' => '00.000.000/0000-00',
                    'ddd' => '32',
                    'telefone' => '2357-1268'
            ],
            2 => [
                    'nome' => 'Fornecedor 3',
                    'status' => 'S',
                    'cnpj' => '00.000.000/0000-00',
                    'ddd' => '85',
                    'telefone' => '92510-2894'
            ],
            3 => [
                    'nome' => 'Fornecedor 4',
                    'status' => 'N',
                    'cnpj' => '00.000.000/0000-00',
                    'ddd' => '21',
                    'telefone' => '2039-1241'
            ]
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
