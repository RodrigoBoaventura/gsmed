@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Médico</h1>
    <form method="POST" action="{{ route('medicos.update', $medico->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" value="{{ $medico->nome }}" required>
        </div>
        <div class="form-group">
            <label for="CRM">CRM:</label>
            <input type="text" name="crm" class="form-control" value="{{ $medico->crm }}" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" class="form-control" value="{{ $medico->telefone }}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $medico->email }}">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
    
    <form method="POST" action="{{ route('medicos.destroy', $medico->id) }}" style="display: inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este médico?')">Excluir</button>
    </form>
</div>
@endsection
