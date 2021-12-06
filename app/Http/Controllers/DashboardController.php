<?php

namespace App\Http\Controllers;

use App\Models\Inform;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function tables() {
        return view('informes',
            [
                'users'=>User::all(),
                'tasks'=>Task::all(),
                'informes'=>Inform::all(),
            ]
        );
    }
}
