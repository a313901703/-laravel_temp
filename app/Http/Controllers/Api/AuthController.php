<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Validator;

class AuthController extends ApiController
{
    public function login()
    {
        $validator = Validator::make(request()->all(),[
            'password' => 'required',
            'email' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->first(),
                'status_code' => 500,
            ]);
        }

        $credentials = request()->only(['email', 'password']);
        if (! $token = auth()->attempt($credentials)) {
            return response()->fail(500,'The username or password is incorrect');
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        $data = auth()->user()->toArray();
    
        return response()->success($data);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return respondWithToken(auth('admin')->refresh());
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\Guard
     */
    public function guard()
    {
        return Auth::guard($this->guard);
    }

    protected function respondWithToken($token)
    {
        return response()->success([
            'status_code' => 200,
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,
        ]);
    }
}
