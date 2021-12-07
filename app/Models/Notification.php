<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id'];

    public function clients()
    {
        // return $this->belongsToMany(Client::class, 'client_notifications', 'notification_id', 'client_id')
        //     ->withPivot(['start_time', 'frequency', 'status']);

        return $this->belongsToMany(Client::class)->using(ClientNotification::class);
    }
}
