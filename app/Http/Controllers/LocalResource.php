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

    public function local($item, $parent = null, $value = null)
    {
        $query = Local::select($item);

        if ($parent && $value) {
            $query = $query->where($parent, $value);
        }

        return new LocalCollection($query->distinct()->get());
    }
}
