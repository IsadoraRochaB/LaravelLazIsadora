<?php

namespace App\Listeners;

use App\Events\AvisoUserCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\InteractsWithQueue;

class SendPushListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\AvisoUserCreated  $event
     * @return void
     */
    public function handle(AvisoUserCreated $event)
    {
        $avisoUser = $event->getAvisoUser();
        Http::post('https://exp.host/--/api/v2/push/send', [
            'to' => $avisoUser->user->token,
            'title' => $avisoUser->aviso->body,
            'body' => $avisoUser->aviso->body
        ]);
    }
}
