<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetorController extends Controller
{
    public function list() {
        return view('setores');
    }

        public function setor($id)
    {
        return view('setor', ['id' => $id]);
    }
}
