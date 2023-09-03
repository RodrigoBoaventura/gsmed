<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico; // Importe o modelo de Médico

class MedicoController extends Controller
{
    public function index()
    {
        $medicos = Medico::all();
        return view('medicos.index', compact('medicos'));
    }

    public function create()
    {
        return view('medicos.create');
    }

    public function store(Request $request)
    {
        // Lógica para armazenar um novo médico no banco de dados
    }

    public function edit($id)
    {
        // Lógica para editar um médico com o ID especificado
    }

    public function update(Request $request, $id)
    {
        // Lógica para atualizar um médico com o ID especificado
    }

    public function destroy($id)
    {
        // Lógica para excluir um médico com o ID especificado
    }
}
