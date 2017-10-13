<?php

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
    return (int) $user->id === (int) $id;
});

Broadcast::channel('App.Orderservice.{id}', function ($orderservice, $id) {
    return (int) $orderservice->id === (int) $id;
});

Broadcast::channel('App.Orcamento.{id}', function ($orcamento, $id) {
    return (int) $orcamento->id === (int) $id;
});