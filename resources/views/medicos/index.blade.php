@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Médicos</h1>
    <a href="{{ route('medicos.create') }}" class="btn btn-success mb-3">Cadastrar Médico</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CRM</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicos as $medico)
            <tr>
                <td>{{ $medico->id }}</td>
                <td>{{ $medico->nome }}</td>
                <td>{{ $medico->crm }}</td>
                <td>
                    <a href="{{ route('medicos.edit', $medico->id) }}" class="btn btn-primary">Editar</a>
                   
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
