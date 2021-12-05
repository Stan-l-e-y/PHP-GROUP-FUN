<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Notification;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function show()
    {
        $clients = Client::all();
        //$notif = Notification::find(1);

        //print_r($client);
        return view('show', ['clients' => $clients]);
    }

    public function create()
    {
        return view('client-create');
    }

    public function destroy(Client $client)
    {

        $client->delete();

        return redirect('/clients');
    }
}
