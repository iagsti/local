<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlocoRequest;
use App\Models\Bloco;

class BlocoController extends Controller
{

    protected $bloco;

    public function __construct(Bloco $bloco)
    {
        $this->bloco = $bloco;
    }


    public function create()
    {
        return view('bloco.create');
    }


    public function store(StoreBlocoRequest $request)
    {
        $validatedData = $request->validated();
        $this->bloco->create($validatedData);

        return redirect()->route('bloco.create')->with('success', 'O Bloco foi criado com sucesso!');
    }
}
