<?php

namespace App\Http\Controllers\Api\V1;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;

class AuthController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required|min:5|max:50|string',
            'email'     => 'required|max:100|unique:users|email|string',
            'password'  => 'required|min:8|confirmed|string',
            'phone_number'  => 'unique:users|numeric',
            'address'   => 'string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'    => 'error',
                'message'    => 'Something went wrong!',
                'data' => $validator->errors()
            ], 401);
        }

        $data = $request->only(['name', 'email', 'password', 'phone_number', 'address']);
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        return response()->json([
            'user' => $user,
            'token' => $user->createToken('api_Auth_token')->accessToken,
        ]);

    }

    public function login(Request $request)
    {
        $status = 401;
        $response = ['error' => 'Unauthorised'];

        if (Auth::attempt($request->only(['email', 'password']))) {
            $status = 200;
            $response = [
                'status'    => 'success',
                'message'    => 'Successfully logged in!',
                'data'    => [
                    'user' => Auth::user(),
                    'token' => Auth::user()->createToken('api_Auth_token')->accessToken,
                ]

            ];
        }

        return response()->json($response, $status);
    }
}
