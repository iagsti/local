<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Http\Requests\StoreLocalRequest;
use App\Http\Requests\UpdateLocalRequest;
use Symfony\Component\Console\Input\Input;


class LocalController extends Controller
{


    protected $model;


    public function __construct(Local $local)
    {
        $this->model = $local;
    }

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
        $locals = [
            'blocos' => config('options.blocos'),
            'pavimentos' => config('options.pavimentos'),
            'departamentos' => config('options.departamentos'),
        ];

        return view('local.create', $locals);
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

    /**
     * Edit Local data
     */
    public function edit($local)
    {
        $local = Local::find($local);

        $context = [
            'blocos' => config('options.blocos'),
            'pavimentos' => config('options.pavimentos'),
            'departamentos' => config('options.departamentos'),
            'local' => $local,
        ];

        return view('local.edit', $context);
    }

    /**
     * Update local data
     */
    public function update(UpdateLocalRequest $request, $id)
    {
        $local = $this->model->find($id);
        $validatedData = $request->validated();

        $local->nome = $validatedData['nome'];
        $local->bloco = $validatedData['bloco'];
        $local->pavimento = $validatedData['pavimento'];
        $local->departamento = $validatedData['departamento'];
        $local->descricao = $validatedData['descricao'];

        $local->save();

        return redirect()->route('local.index');
    }
}
