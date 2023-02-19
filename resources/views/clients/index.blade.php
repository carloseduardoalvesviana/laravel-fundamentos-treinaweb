@extends('app')

@section('titulo')
    Lista de clientes
@endsection

@section('conteudo')
    <h3 class="mt-2">Lista de clientes</h3>

    <a href="{{ route('clients.create') }}" class="btn btn-success">Novo cliente</a>

    <table class="table mt-2 table-bordered">
        <thead>
            <tr class="bg-light">
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <th>{{ $client->id }}</th>
                    <td>{{ $client->nome }}</td>
                    <td>{{ $client->endereco }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('clients.show', $client) }}">Detalhes</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('clients.edit', $client) }}">Atualizar</a>
                        <form action="{{ route('clients.destroy', $client) }}" method="post" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Deseja apagar esse cliente?')"
                                type="submit">Apagar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
