<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Local;
use App\Http\Requests\StoreLocalRequest;


class LocalController extends Controller
{
    public function create()
    {
        return view('local.create');
    }

    public function store(StoreLocalRequest $request)
    {
        $validatedData = $request->validated();
        Local::create($validatedData);

        return redirect()->route('local.create')->with('success', 'O local foi criado com sucesso!');
    }
}
