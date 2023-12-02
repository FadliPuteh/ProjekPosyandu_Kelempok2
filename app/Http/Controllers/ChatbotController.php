<?php

namespace App\Http\Controllers;

use App\Models\Chatbot;
use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function chat_bot(Request $request){
        $find = Chatbot::where('pertanyaan','LIKE',"%$request->pesan%")->first();
        if($find){
            return $find->jawaban;
        }
        return "Mohon maaf, Aku belum bisa membalas pertanyaan kamu. Untuk informasi lebih lanjut silahkan chat via Whatsapp!";
    }
}
