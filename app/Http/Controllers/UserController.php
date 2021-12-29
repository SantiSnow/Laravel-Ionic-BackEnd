<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUserData(Request $request)
    {
        return User::where('email', $request->email)->first();
    }

    public function get_users()
    {
        return User::all();
    }
}
