<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\views\pages\complete;
use routes\web;

class questionBoardController extends Controller
{
    public function questionBoard(){
        return view('pages/questionBoard');
    }

    public function sendMail(Request $request)
    {
        $request->validate([
            "title" => ['required','string','max:255'],
            "body" => ['required','string','max:1500']
        ]);

        //メールの送信

        return view('pages/complete');
    }

    public function complete(){
        return view('pages/complete');
    }
}
