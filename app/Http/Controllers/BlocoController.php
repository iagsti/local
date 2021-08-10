<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlocoRequest;
use App\Models\Bloco;

class BlocoController extends Controller
{

    public function create()
    {
        return view('bloco.create');
    }


    public function store(StoreBlocoRequest $request)
    {
        $validatedData = $request->validated();
        $bloco = Bloco::create($validatedData);

        if ($bloco) {
            return redirect()->route('bloco.create')->with('success', 'O Bloco foi criado com sucesso!');
        }

        return redirect()->route('bloco.store')->with('error', 'Erro ao criar bloco');
    }
}
