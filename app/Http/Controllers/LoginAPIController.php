<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginAPIController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $user = User::where('email', $email)->first();

        if($user){
            if(Hash::check($request->password, $user->password))
            {
                return response()->json([
                    'Status' => 'Login Success',
                ]);
            }
            else{
                return response()->json([
                    'Status' => 'User/Password Wrong',
                ]);
            }
        }
        else{
            return response()->json([
                'Status' => 'User not found'
            ]);
        }
    }
}
