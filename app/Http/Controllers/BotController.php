<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BotService;

class BotController extends Controller
{
    function index(Request $request)
    {
        $bot = new BotService();
    }
}
