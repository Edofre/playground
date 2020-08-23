<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * @OA\Get(
     *  path="/test",
     *  operationId="testIndex",
     *  tags={"Test"},
     *  summary="Testing summary",
     *  description="Testing description",
     *  @OA\Response(
     *      response=200,
     *      description="Successful operation",
     *      @OA\JsonContent()
     *  )
     * )
     */
    public function index()
    {
        $user = User::find(1);
        $token = $user->createToken('test-api');
        return $token->plainTextToken;
    }

    /**
     * @OA\Post(
     *  path="/protected/test",
     *  operationId="protectedTestIndex",
     *  tags={"Test"},
     *  summary="Testing protected route summary",
     *  description="Testing proteced route description",
     *  security={{"bearerAuth":{}}},
     *  @OA\Response(
     *      response=200,
     *      description="Successful operation",
     *      @OA\JsonContent()
     *  ),
     *  @OA\Response(
     *      response=401,
     *      description="Unauthenticated",
     *      @OA\JsonContent()
     *  )
     * )
     */
    public function protectedIndex(Request $request)
    {
        return $request->user();
    }
}
