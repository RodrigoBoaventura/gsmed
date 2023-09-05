@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Especialidades</h1>
    <a href="{{ route('especialidades.create') }}" class="btn btn-success mb-3">Cadastrar Especialidade</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($especialidades as $especialidade)
            <tr>
                <td>{{ $especialidade->id }}</td>
                <td>{{ $especialidade->nome }}</td>
                <td>{{ $especialidade->descricao }}</td>
                <td>
                    <a href="{{ route('especialidades.edit', $especialidade->id) }}" class="btn btn-primary">Editar</a>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
