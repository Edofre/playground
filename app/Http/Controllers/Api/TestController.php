<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;

class TestController extends Controller
{
    /**
     * @OA\Get(
     *      path="/test",
     *      operationId="testIndex",
     *      tags={"Test"},
     *      summary="Testing summary",
     *      description="Testing description",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *     )
     */
    public function index()
    {
        $user = User::find(1);

        $token = $user->createToken('test-api');

        return $token->plainTextToken;
    }
}
