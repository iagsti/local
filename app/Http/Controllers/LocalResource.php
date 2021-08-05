<?php

namespace App\Http\Controllers;

use App\Http\Resources\LocalCollection;
use App\Models\Local;

class LocalResource extends Controller
{
    public function index()
    {
        return new LocalCollection(Local::paginate());
    }

    public function blocos()
    {
        return new LocalCollection(Local::select('bloco')->distinct()->get());
    }
}
