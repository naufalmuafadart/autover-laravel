<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(Request $request) {
        $user = new User;
        $plain_password = $request->post('password');

        if ($this->isValueExistInColumn('email', $request->post('email'))) {
            return response()->json([
                "status" => 'failed',
                'message' => 'Email have been registered'
            ])->setStatusCode(400);
        } else if ($this->isValueExistInColumn('phone_number', $request->post('phone_number'))) {
            return response()->json([
                "status" => 'failed',
                'message' => 'Phone number have been registered'
            ])->setStatusCode(400);
        }

        $user->full_name = $request->post('full_name');
        $user->phone_number = $request->post('phone_number');
        $user->password = Hash::make($plain_password);
        $user->email = $request->post('email');

        $user->save();
        return response()->json([
            "status" => 'success',
            'message' => 'Success register user'
        ]);
    }

    public function login(Request $request) {
        $email = $request->post('email');
        $plain_password = $request->post('password');

        if (!User::where('email', $email)->count() > 0) {
            return response()->json([
                "status" => 'failed',
                'message' => 'Email not registered',
            ])->setStatusCode(400);
        }

        $user = User::where('email', $email)->first();

        if (!Hash::check($plain_password, $user->password)) {
            return response()->json([
                "status" => 'failed',
                'message' => 'Password is incorrect',
            ])->setStatusCode(400);
        }

        session(["id" => $user->id]);

        return response()->json([
            "status" => 'success',
            'message' => 'Success login',
        ]);
    }

    private function isValueExistInColumn(String $column, $value): bool
    {
        return User::where($column, $value)->count() > 0;
    }
}
