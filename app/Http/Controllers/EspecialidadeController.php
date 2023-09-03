<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidade; // Importe o modelo de Especialidade

class EspecialidadeController extends Controller
{
    public function index()
    {
        $especialidades = Especialidade::all();
        return view('especialidades.index', compact('especialidades'));
    }

    public function create()
    {
        return view('especialidades.create');
    }

    public function store(Request $request)
    {
        // Lógica para armazenar uma nova especialidade no banco de dados
    }

    public function edit($id)
    {
        // Lógica para editar uma especialidade com o ID especificado
    }

    public function update(Request $request, $id)
    {
        // Lógica para atualizar uma especialidade com o ID especificado
    }

    public function destroy($id)
    {
        // Lógica para excluir uma especialidade com o ID especificado
    }
}

