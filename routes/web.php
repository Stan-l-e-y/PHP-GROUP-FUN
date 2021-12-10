<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ClientNotificationsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\LogsController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UsersController;
use App\Mail\NotificationMail;
use App\Models\Client;
use App\Models\ClientNotification;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', [SessionsController::class, 'view']);


Route::get('/navigation', function () {
    return view('navigation');
})->middleware('auth');

// When clicking on the notification manager, return me the notif-manager view with all of the clients
// and all of the notifications that belong to those clients, eager loading here at the end 
// Route::get('/notification-manager', function () {
//     return view('notification-manager', [
//         'client' =>  Client::with('notification')->get()
//     ]);
// });

//Client Routes

Route::get('/clients/create', [ClientsController::class, 'create'])->middleware('auth');


Route::get('/clients', [ClientsController::class, 'show'])->middleware('auth');

Route::post('/clients', [ClientsController::class, 'store'])->middleware('auth');

//Utilizing Route Model binding, to bind a model to a route and display an entry in a view
Route::get('/clients/{client}/edit', function (Client $client) {
    return view('client-update', [
        'client' => $client
    ]);
})->middleware('auth');

Route::patch('/clients/{client}', [ClientsController::class, 'update'])->middleware('auth');

Route::delete('/clients/{client}', [ClientsController::class, 'destroy'])->middleware('auth');


//Notification Routes

Route::get('/notifications', [NotificationsController::class, 'show'])->middleware('auth');

Route::get('/notifications/create', [NotificationsController::class, 'create'])->middleware('auth');

Route::post('/notifications', [NotificationsController::class, 'store'])->middleware('auth');

Route::get('/notifications/{notification}/edit', function (Notification $notification) {
    return view('notification-update', [
        'notification' => $notification
    ]);
})->middleware('auth');

Route::patch('/notifications/{notification}', [NotificationsController::class, 'update'])->middleware('auth');

Route::delete('/notifications/{notification}', [NotificationsController::class, 'destroy'])->middleware('auth');

//Client Event Routes /clientnotifications

Route::get('/clientnotifications', [ClientNotificationsController::class, 'show'])->middleware('auth');

Route::get('/clientnotifications/create', [ClientNotificationsController::class, 'create'])->middleware('auth');

Route::post('/clientnotifications', [ClientNotificationsController::class, 'store'])->middleware('auth');

Route::get('/clientnotifications/{clientnotification}/edit', function (ClientNotification $clientnotification) {
    return view('clientnotification-update', [
        'clientnotification' => $clientnotification
    ]);
})->middleware('auth');

Route::patch('/clientnotifications/{clientnotification}', [ClientNotificationsController::class, 'update'])->middleware('auth');

Route::delete('/clientnotifications/{clientnotification}', [ClientNotificationsController::class, 'destroy'])->middleware('auth');



//Register a user corresponding routes
// Route::get('register', [RegisterController::class, 'create'])->middleware('guest');

// Route::post('register', [RegisterController::class, 'store'])->middleware('guest');


//Session routes
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest')->name('login');

Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');


//Employee routes

Route::get('/users', [UsersController::class, 'show'])->middleware('auth');

Route::get('/users/create', [UsersController::class, 'create'])->middleware('auth');

Route::post('/users', [UsersController::class, 'store'])->middleware('auth');

Route::get('/users/{user}/edit', function (User $user) {
    return view('user-update', [
        'user' => $user
    ]);
})->middleware('auth');

Route::patch('/users/{user}', [UsersController::class, 'update'])->middleware('auth');

Route::delete('/users/{user}', [UsersController::class, 'destroy'])->middleware('auth');

//Log route
Route::get('/logs', [LogsController::class, 'show'])->middleware('auth');


//Mail route
Route::get('/email', function () {
    Mail::to('stanleytsonev@hotmail.com')->send(new NotificationMail());
    return new NotificationMail();
})->middleware('auth');;
