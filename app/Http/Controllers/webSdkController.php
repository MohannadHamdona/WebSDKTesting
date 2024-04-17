<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class webSdkController extends Controller
{
    public function webSdk(Request $request) {
        $endLog = new Logger("messages");
        $endLog->pushHandler(new StreamHandler(storage_path('logs/webhook')), Logger::INFO);
        $endLogMsg = [$request->all()];
        $endLog->info('From_WEBSITE_TO_WCP', $endLogMsg);
    } 
}
