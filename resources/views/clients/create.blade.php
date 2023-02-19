@extends('app')

@section('titulo')
    Novo Cliente
@endsection

@section('conteudo')
    <a href="{{ route('clients.index') }}">voltar</a>
    <h2>Novo Cliente</h2>

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" required class="form-control" id="nome" name="nome" placeholder="Digite o nome">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" required class="form-control" id="endereco" name="endereco"
                placeholder="Digite o endereco">
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea class="form-control" id="observacao" name="observacao" rows="3" placeholder="Digite uma observação"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
@endsection
