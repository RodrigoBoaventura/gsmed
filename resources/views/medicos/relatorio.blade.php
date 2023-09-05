@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Relatório de Médicos</h1>

    <form method="GET" action="{{ route('medicos.relatorio') }}">
        @csrf
        <div class="form-group">
            <label for="crm">CRM:</label>
            <input type="text" name="crm" class="form-control" value="{{ $crm }}">
        </div>

        <div class="form-group">
            <label for="especialidade_id">Especialidade:</label>
            <select name="especialidade_id" class="form-control">
                <option value="">Selecione uma especialidade</option>
                @foreach ($especialidades as $especialidade)
                    <option value="{{ $especialidade->id }}" {{ $especialidadeId == $especialidade->id ? 'selected' : '' }}>
                        {{ $especialidade->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </div>
    </form>

    <hr>

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CRM</th>
                <th>Especialidades</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicos as $medico)
                <tr>
                    <td>{{ $medico->nome }}</td>
                    <td>{{ $medico->crm }}</td>
                    <td>
                        @foreach ($medico->especialidades as $especialidade)
                            {{ $especialidade->nome }}@if (!$loop->last), @endif
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
