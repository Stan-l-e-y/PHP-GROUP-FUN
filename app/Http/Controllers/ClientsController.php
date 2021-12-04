<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Notification;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function show()
    {
        $client = Client::find(1);
        $notif = Notification::find(1);

        //print_r($client);
        return view('show', ['client' => $client, 'notif' => $notif]);
    }

    public function create()
    {
        return view('client-create');
    }
}
