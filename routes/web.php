<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\PostsController;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
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



Route::get('/navigation', function () {
    return view('navigation');
});

// When clicking on the notification manager, return me the notif-manager view with all of the clients
// and all of the notifications that belong to those clients, eager loading here at the end 
// Route::get('/notification-manager', function () {
//     return view('notification-manager', [
//         'client' =>  Client::with('notification')->get()
//     ]);
// });

Route::get('/clients/create', [ClientsController::class, 'create']);


Route::get('/posts', [PostsController::class, 'index']);


Route::get('/clients', [ClientsController::class, 'show']);

Route::get('/clients/{client}', function (Client $client) {
    return view('client-update', [
        'client' => $client
    ]);
});


Route::delete('/clients/{client}', [ClientsController::class, 'destroy']);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
