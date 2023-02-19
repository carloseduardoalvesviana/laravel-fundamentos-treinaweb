@extends('app')

@section('titulo')
    Detalhes do cliente
@endsection

@section('conteudo')
    <a href="{{ route('clients.index') }}">Voltar</a>

    <div class="card mt-2">
        <div class="card-header">
            <h5>Detalhes do cliente: {{ $client->nome }}</h5>
        </div>
        <div class="card-body">
            <p><strong>ID: </strong>{{ $client->id }}</p>
            <p><strong>Nome: </strong>{{ $client->nome }}</p>
            <p><strong>Endereço: </strong>{{ $client->endereco }}</p>
            <p><strong>Observação: </strong>{{ $client->observacao }}</p>
        </div>
    </div>
@endsection
