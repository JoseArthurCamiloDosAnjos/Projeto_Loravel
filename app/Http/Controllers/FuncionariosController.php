<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class FuncionariosController extends Controller
{
    public function mostrar()
    {
        return view('mostrar');
    }
    public function Novo()
    {
        return view('Novo');
    }
    
    
    public function Adicionar()
    {
        return view('adicionar');
    }
    public function Editar()
    {
        return view('editar');
    }
    public function Atualizar()
    {
        return view('atualizar');
    }
    public function Excluir()
    {
        return view('excluir');
    }
    
}
