@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Especialidade</h1>
    <form method="POST" action="{{ route('especialidades.store') }}">
        @csrf
        <div class="form-group">
            <label for="nome">Nome da Especialidade:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" class="form-control" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection
