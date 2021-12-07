<?php

namespace App\Http\Controllers;

use App\Models\ClientNotification;
use Illuminate\Http\Request;

class ClientNotificationsController extends Controller
{
    public function show()
    {
        $clientnotifications = ClientNotification::all();


        return view('clientnotifications-show', ['clientnotifications' => $clientnotifications]);
    }

    public function create()
    {
        return view('clientnotification-create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'client_id' => 'required|numeric',
            'notification_id' => 'required|numeric',
            'start_time' => 'required|date',
            'frequency' => 'required|numeric',
            'status' => 'nullable'
        ]);

        ClientNotification::create($attributes);

        //session()->flash('success', 'Client Created!');

        return redirect('/clientnotifications')->with('success', 'Client Event Created!');
    }

    public function update(ClientNotification $clientnotification)
    {

        $attributes = request()->validate([
            'client_id' => 'required|numeric',
            'notification_id' => 'required|numeric',
            'start_time' => 'required|date',
            'frequency' => 'required|numeric',
            'status' => 'nullable'
        ]);

        $clientnotification->update($attributes);

        //return response()->json(['status' => 'Client Updated!']);
        return redirect('/clientnotifications')->with('success', 'Client Event Updated!');
    }

    public function destroy(ClientNotification $clientnotification)
    {

        $clientnotification->delete();

        return response()->json(['status' => 'Client Event Deleted!']);
        //return redirect('/clients')
    }
}
