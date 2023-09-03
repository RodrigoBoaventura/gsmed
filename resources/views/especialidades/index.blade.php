<!-- resources/views/especialidades/index.blade.php -->

@extends('layouts.app') <!-- Se você tem um layout principal, estenda-o aqui -->

@section('content')
<div class="container">
    <h1>Listagem de Especialidades</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($especialidades as $especialidade)
            <tr>
                <td>{{ $especialidade->nome }}</td>
                <td>{{ $especialidade->descricao }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
