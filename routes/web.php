<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\PostsController;
use App\Models\Client;
use App\Models\Notification;
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

//Client Routes

Route::get('/clients/create', [ClientsController::class, 'create']);


Route::get('/posts', [PostsController::class, 'index']);


Route::get('/clients', [ClientsController::class, 'show']);

Route::post('/clients', [ClientsController::class, 'store']);

//Utilizing Route Model binding, to bind a model to a route and display an entry in a view
Route::get('/clients/{client}/edit', function (Client $client) {
    return view('client-update', [
        'client' => $client
    ]);
});

Route::patch('/clients/{client}', [ClientsController::class, 'update']);

Route::delete('/clients/{client}', [ClientsController::class, 'destroy']);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Notification Routes

Route::get('/notifications', [NotificationsController::class, 'show']);

Route::get('/notifications/create', [NotificationsController::class, 'create']);

Route::post('/notifications', [NotificationsController::class, 'store']);

Route::get('/notifications/{notification}/edit', function (Notification $notification) {
    return view('notification-update', [
        'notification' => $notification
    ]);
});

Route::patch('/notifications/{notification}', [NotificationsController::class, 'update']);

Route::delete('/notifications/{notification}', [NotificationsController::class, 'destroy']);
