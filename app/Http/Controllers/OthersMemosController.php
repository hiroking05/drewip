<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Topic;

class OthersMemosController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $memos = $user->feed_memos()->orderBy('created_at', 'desc')->paginate(10);
            $topic = $user;

            $data = [
                'user' => $user,
                'memos' => $memos,
                'topic' =>$topic,
            ];
        }
        return view('othersmemos.index', $data);
    }
}
