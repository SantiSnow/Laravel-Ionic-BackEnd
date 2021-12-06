<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create_task(Request $request)
    {
        $task = new Task();

        $task->title = $request->title;
        $task->user_id = $request->user;
        $task->done = 0;

        $task->save();

        return redirect('/tablas');
    }
}
