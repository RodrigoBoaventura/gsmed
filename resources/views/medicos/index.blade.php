
@extends('layouts.app') <!-- Se você tem um layout principal, estenda-o aqui -->

@section('content')
<div class="container">
    <h1>Listagem de Médicos</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CRM</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Data de Cadastro</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicos as $medico)
            <tr>
                <td>{{ $medico->nome }}</td>
                <td>{{ $medico->crm }}</td>
                <td>{{ $medico->telefone }}</td>
                <td>{{ $medico->email }}</td>
                <td>{{ $medico->dt_cadastro }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection