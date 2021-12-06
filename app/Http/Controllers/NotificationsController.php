<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function show()
    {
        $notifications = Notification::all();


        return view('notifications-show', ['notifications' => $notifications]);
    }

    public function create()
    {
        return view('notification-create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|string',
            'type' => 'required',
            'status' => 'required'
        ]);

        Notification::create($attributes);

        return redirect('/notifications')->with('success', 'Notification Created!');
    }

    public function update(Notification $notification)
    {

        $attributes = request()->validate([
            'name' => 'required|string',
            'type' => 'required',
            'status' => 'required'
        ]);

        $notification->update($attributes);

        //return response()->json(['status' => 'Client Updated!']);
        return redirect('/notifications')->with('success', 'Notification Updated!');
    }

    public function destroy(Notification $notification)
    {

        $notification->delete();

        return response()->json(['status' => 'Notification Deleted!']);
        //return redirect('/clients')
    }
}
