<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;

class TestController extends Controller
{
    public function index()
    {
        $user = User::find(1);
        
        $token = $user->createToken('test-api');

        return $token->plainTextToken;
    }
}
