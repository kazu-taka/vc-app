<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function hello() {
        return view('message.hello', ['msg' => 'Hello View!']);
    }
}
