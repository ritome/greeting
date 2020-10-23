<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function views1($time) {
    switch ($time) {
        case 'morning':
            $time_zone = '朝のあいさつ';
            $greeting = 'おはようございます';
            break;
        case 'afternoon':
            $time_zone = '昼のあいさつ';
            $greeting = 'こんにちは';
            break;
        case 'evening':
            $time_zone = '夕方のあいさつ';
            $greeting = 'こんばんは';
            break;
        case 'night':
            $time_zone = '夜のあいさつ';
            $greeting = 'おやすみ';
            break;
        
        default:
            echo 'エラーです';
            break;
    }
    
    return view('greeting.views1', ['time_zone' => $time_zone, 'greeting' => $greeting]);
    }

    public function views2($word)
    {
        return view('greeting.views2', ['word' => $word]);
    }

    public function views3()
    {
        $greetings = ['おはよう','こんにちは','こんばんは','おやすみ'];
        //$rand_keys = array_rand($greetings, 1);

        return view('greeting.views3', ['greetings' => $greetings[array_rand($greetings)]]);
    }
}
