<?php

namespace App\Http\Controllers\DataTables;

use App\Http\Controllers\Controller;

class DataTableController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('data-tables.index');
    }
}
