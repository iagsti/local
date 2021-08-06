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

    public function local($item)
    {
        return new LocalCollection(Local::select($item)->distinct()->get());
    }
}
