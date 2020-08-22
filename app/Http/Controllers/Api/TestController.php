<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index()
    {
        return ['1' => 2];
    }
}
