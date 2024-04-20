<?php

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//All Courses
Route::get('/', function () {
    return view('main', [
        'heading' => 'Online kurzusok',
        'courses' => Course::all()
    ]);
});

Route::get('/register', [UserController::class, 'create']);

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/login', [UserController::class, 'login']);

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/manage', function () {
    return view('/users/manage', [
        'users' => User::all()
    ]);
});

Route::get('/userprogress', [UserController::class, 'userprogress']);

Route::get('/users/edit/{user}', [UserController::class, 'edit']);

Route::put('/users/edit/{user}', [UserController::class, 'editeduser']);

Route::delete('/delete/{user}', [UserController::class, 'deleteuser']);

