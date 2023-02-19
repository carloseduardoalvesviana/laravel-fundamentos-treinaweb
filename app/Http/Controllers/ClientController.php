<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    /**
     * Lista os clientes
     *
     * @return View
     */
    public function index(): View
    {
        $clients = Client::get();

        return view('clients.index', ['clients' => $clients]);
    }

    /**
     * Mostra um cliente especifico
     *
     * @param integer $id
     * @return View
     */
    public function show(int $id): View
    {
        $client = Client::find($id);

        return view('clients.show', ['client' => $client]);
    }

    /**
     * Exibe o formulario de editar
     *
     * @param integer $id
     * @return View
     */
    public function edit(int $id): View
    {
        $client = Client::find($id);
        return view('clients.edit', ['client' => $client]);
    }

    /**
     * Atualizar o cliente
     *
     * @param Request $request
     * @param integer $id
     * @return void
     */
    public function update(Request $request, int $id)
    {
        $client = Client::find($id);
        $client->update($request->except('_token'));
        return redirect()->route('clients.index');
    }

    /**
     * Exibe o formulario de cadastro de cliente
     *
     * @return View
     */
    public function create(): View
    {
        return view('clients.create');
    }

    /**
     * Salvar o cliente no banco
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $dados = $request->except(['_token']);
        Client::create($dados);
        return redirect()->route('clients.index');
    }

    /**
     * Apaga um cliente especifico
     *
     * @param integer $id
     * @return void
     */
    public function destroy(int $id)
    {
        Client::destroy($id);
        return redirect()->route('clients.index');
    }
}
