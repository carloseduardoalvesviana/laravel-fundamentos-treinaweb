@extends('app')

@section('titulo')
    Editar Cliente
@endsection

@section('conteudo')
    <a href="{{ route('clients.index') }}">voltar</a>
    <h2>Editar Cliente</h2>

    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" required class="form-control" value="{{ $client->nome }}" id="nome" name="nome"
                placeholder="Digite o nome">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" required class="form-control" value="{{ $client->endereco }}" id="endereco"
                name="endereco" placeholder="Digite o endereco">
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea class="form-control" id="observacao" name="observacao" rows="3" placeholder="Digite uma observação">{{ $client->observacao }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Atualizar</button>
    </form>
@endsection
