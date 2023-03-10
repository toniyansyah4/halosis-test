<?php

namespace Modules\User\Http\Controllers\Api\V1\Auth;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Modules\User\Entities\User;
use Modules\User\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    /**
     * @param LoginRequest $request
     * Login user Methode
     */
    public function __invoke(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return errorResponse('', 401);
        }

        if (!Hash::check($request->password, $user->password)) {
            return errorResponse('', 401);
        }

        $token = $user->createToken('myApp')->plainTextToken;
        return successResponse([
            'user' => $user,
            'token' => $token
        ], 200);
    }

}
