<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Exibe a pagina home
     *
     * @return View
     */
    public function __invoke()
    {
        return view('home');
    }
}
