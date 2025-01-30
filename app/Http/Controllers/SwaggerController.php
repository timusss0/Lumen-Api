<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

class SwaggerController extends Controller
{
    /**
     * @OA\Info(title="Lumen API", version="1.0")
     */

    /**
     * @OA\Get(
     *     path="/users",
     *     summary="Get all users",
     *     @OA\Response(response="200", description="A list of users")
     * )
     */
    public function getUsers()
    {
        // Your code here to get users
    }

    /**
     * @OA\Post(
     *     path="/users",
     *     summary="Create a new user",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name", "email", "age"},
     *             @OA\Property(property="name", type="string"),
     *             @OA\Property(property="email", type="string"),
     *             @OA\Property(property="age", type="integer")
     *         )
     *     ),
     *     @OA\Response(response="201", description="User created")
     * )
     */
    public function createUser(Request $request)
    {
        // Your code here to create user
    }
}
