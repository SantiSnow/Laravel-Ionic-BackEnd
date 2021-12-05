<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function userTasks(Request $request)
    {
        $user = User::where('email',$request->email)->first();

        return Task::where('user_id', $user->id)->get();
    }
}
