<?php

namespace App\Services;
use Telegram\Bot\Laravel\Facades\Telegram;

class BotService
{
    public function __construct()
    {
        $response = Telegram::getMe();
        dd($response);
    }
}
