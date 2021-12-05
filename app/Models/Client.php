<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Notifications\Notification;

class Client extends Model
{
    use HasFactory;

    public function notifications()
    {
        return $this->belongsToMany(Notification::class, 'client_notifications', 'client_id', 'notification_id')
            ->withPivot(['start_time', 'frequency', 'status']);
    }
}
