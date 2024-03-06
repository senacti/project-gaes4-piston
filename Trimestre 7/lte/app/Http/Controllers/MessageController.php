<?php

namespace App\Http\Controllers;   
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index(){
        $messages = Message::all();
        return view('messages.index', compact('messages'));

    }
}
