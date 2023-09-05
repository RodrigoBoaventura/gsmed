@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Especialidade</h1>
    <form method="POST" action="{{ route('especialidades.update', $especialidade->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" value="{{ $especialidade->nome }}" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" class="form-control">{{ $especialidade->descricao }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
 
    <form method="POST" action="{{ route('especialidades.destroy', $especialidade->id) }}" style="display: inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta especialidade?')">Excluir</button>
    </form>
</div>
@endsection
