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

    public function update(Client $client)
    {

        $attributes = request()->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'company_name' => 'required|string',
            'business_number' => 'required|numeric',
            'phone_number' => 'required|numeric',
            'cell_number' => 'required|numeric',
            'carrier' => 'required|string',
            'hst_number' => 'nullable|numeric',
            'website' => 'nullable|string',
            'status' => 'nullable'

        ]);

        $client->update($attributes);

        return redirect('/clients')->with('success', 'Client Updated!');
    }

    public function destroy(Client $client)
    {

        $client->delete();

        return response()->json(['status' => 'Deleted!']);
        //return redirect('/clients')
    }

    public function store()
    {
        $attributes = request()->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'company_name' => 'required|string',
            'business_number' => 'required|numeric',
            'phone_number' => 'required|numeric',
            'cell_number' => 'required|numeric',
            'carrier' => 'required|string',
            'hst_number' => 'nullable|numeric',
            'website' => 'nullable|string',
            'status' => 'nullable'

        ]);

        Client::create($attributes);

        //session()->flash('success', 'Client Created!');

        return redirect('/clients')->with('success', 'Client Created!');
    }
}
