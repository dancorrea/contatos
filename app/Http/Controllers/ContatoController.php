<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function list()
    {
        return view('index');
    }

    public function contato($id)
    {
        return view('contato', ['id' => $id]);
    }
}
