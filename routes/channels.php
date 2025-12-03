<?php

use Illuminate\Support\Facades\Broadcast;
// Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
//     return (int) $user->id === (int) $id;
// });

Broadcast::channel('tasks.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});


Broadcast::channel('chat.{roomId}',function($user,$roomId){

    return $user->rooms->where('id',$roomId)->exists();

});