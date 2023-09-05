<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico; 
use App\Models\Especialidade; 



class MedicoController extends Controller
{
    public function index()
    {
        $medicos = Medico::all();
        return view('medicos.index', compact('medicos'));
    }

    public function create()
    {
      
        $especialidades = Especialidade::all();
        return view('medicos.create', compact('especialidades'));
    }

    public function store(Request $request)
    {
            
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'crm' => 'required|string|max:45|unique:medicos',
            'telefone' => 'nullable|string|max:45',
            'email' => 'nullable|email|max:255',
            'especialidades' => 'required|array',
        ]);

        
        $medico = new Medico($validatedData);
        $medico->save();
        foreach ($request->input('especialidades') as $especialidadeId) {
            $medico->especialidades()->attach($especialidadeId);
        }
        return redirect()->route('medicos.create')->with('success', 'Médico cadastrado com sucesso.');
    }

    public function edit($id)
    {
        $medico = Medico::findOrFail($id);
    
        return view('medicos.edit', compact('medico'));
    }
    public function destroy(Medico $medico)
    {
        $medico->especialidades()->detach();

    
        $medico->delete();

        return redirect()->route('medicos.index')->with('success', 'Médico e suas especialidades foram excluídos com sucesso.');
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'crm' => 'required|string|max:45|unique:medicos,crm,' . $id,
            'telefone' => 'nullable|string|max:45',
            'email' => 'nullable|email|max:255',
        ]);
    
        $medico = Medico::findOrFail($id);
        $medico->update($validatedData);
    
        return redirect()->route('medicos.index')->with('success', 'Médico atualizado com sucesso.');
    }
    public function relatorio(Request $request)
    {
        $crm = $request->input('crm');
        $especialidadeId = $request->input('especialidade_id');

        $query = Medico::query();

        if ($crm) {
            $query->where('crm', $crm);
        }

        if ($especialidadeId) {
            $query->whereHas('especialidades', function ($query) use ($especialidadeId) {
                $query->where('especialidades.id', $especialidadeId);
            });
        }

        $medicos = $query->with('especialidades')->get();
        
        $especialidades = Especialidade::all(); // Para exibir opções de filtro

        return view('medicos.relatorio', compact('medicos', 'especialidades', 'crm', 'especialidadeId'));
    }


}
