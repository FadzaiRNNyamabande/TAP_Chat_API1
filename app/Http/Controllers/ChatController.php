<?php

namespace App\Http\Controllers;

use App\Models\Controllers;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    
    public function sendMessage(Request $request)
    {

    $message = Message::create([
        'sender_id' => $request->user()->id,
        'receiver_id' => $request->receiver_id,
        'content' => $request->content,
        'type' => $request->type,
    ]);

    // Broadcast event
    broadcast(new MessageSent($message))->toOthers();

    return response()->json($message, 201);
}

public function getMessages()
{
    $messages = Message::with(['sender', 'receiver'])->get();
    return response()->json($messages);
}
}
