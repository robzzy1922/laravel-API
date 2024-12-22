<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Api;

class TeleApi extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function sendMessage(Request $request)
    {
        $token = env('TELEGRAM_BOT_TOKEN');

        if (!$token) {
            throw new \Exception('Telegram Bot Token tidak ditemukan di konfigurasi');
        }

        $telegram = new Api($token);
        $chatId = '5558436501';
        $message = $request->input('pesan');

        $reponse = $telegram->sendMessage([
            'chat_id' => $chatId,
            'text' => $message,
        ]);

        return redirect()->back();
    }
}
