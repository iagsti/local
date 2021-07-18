<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Http\Requests\StoreLocalRequest;


class LocalController extends Controller
{
    /**
     * List Local data
     */
    public function index()
    {
        $locals = Local::paginate(15);
        return view('local.index', ['locals' => $locals]);
    }

    /**
     * Create a new Local
     */
    public function create()
    {
        return view('local.create');
    }

    /**
     * Persist local data
     */
    public function store(StoreLocalRequest $request)
    {
        $validatedData = $request->validated();
        Local::create($validatedData);

        return redirect()->route('local.create')->with('success', 'O local foi criado com sucesso!');
    }
}
