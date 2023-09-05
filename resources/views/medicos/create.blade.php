@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Médico</h1>
    <form method="POST" action="{{ route('medicos.store') }}">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="CRM">CRM:</label>
            <input type="text" name="crm" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="especialidades">Especialidades:</label>
            <select multiple style="width: 300px" class="form-control" name="especialidades[]" required>
                <!-- Aqui você precisa iterar pelas especialidades disponíveis e criar as opções -->
                @foreach ($especialidades as $especialidade)
                <option value="{{ $especialidade->id }}">{{ $especialidade->nome }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection
