<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    //    return (int)$user->id === (int)$id;
        return $user;
});

Broadcast::channel('room.{roomId}', function ($user, $roomId) {
    if ($user->canJoinRoom($roomId)) {
        return $user;
    }
});

Broadcast::channel('chat', function ($user) {
    if (auth()->check()) {
        return $user;
    }
});
Broadcast::channel('call', function ($user) {
    if (auth()->check()) {
        return $user;
    }
});

Broadcast::channel('admin_dash', function ($user) {
    if (auth()->check()) {
        return $user->toArray();
    }
});
