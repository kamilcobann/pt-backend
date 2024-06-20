<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Message;

class ChatController extends Controller
{
    public function message(Request $request){
        event(new Message($request->userId,$request->message));
        return [];
    }
}
