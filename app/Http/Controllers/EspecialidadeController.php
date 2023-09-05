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
         // Valide os dados do formulário
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        // Crie uma nova especialidade no banco de dados
        Especialidade::create($validatedData);

        return redirect()->route('especialidades.create')->with('success', 'Especialidade cadastrada com sucesso.');
    }
    public function edit($id)
    {
        $especialidade = Especialidade::findOrFail($id);
    
        return view('especialidades.edit', compact('especialidade'));
    }
    public function destroy(Especialidade $especialidade)
    {
        $especialidade->delete();

        return redirect()->route('especialidades.index')->with('success', 'Especialidade excluída com sucesso.');
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:255',
        ]);
    
        $especialidade = Especialidade::findOrFail($id);
        $especialidade->update($validatedData);
    
        return redirect()->route('especialidades.index')->with('success', 'Especialidade atualizada com sucesso.');
    }


}

