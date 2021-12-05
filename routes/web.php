<?php

use App\Http\Controllers\LoginAPIController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\UserController;
use App\Models\Inform;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard',
        [
            'users'=>User::all(),
        ]
    );
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/tablas-dashboard', function () {
    return view('informes',
        [
            'users'=>User::all(),
            'tasks'=>Task::all(),
            'informes'=>Inform::all(),
        ]
    );
})->name('tablas');

Route::post('/login_api', [LoginAPIController::class, 'login']);

Route::post('/tasks', [TasksController::class, 'userTasks']);

Route::post('/user_info', [UserController::class, 'getUserData']);
