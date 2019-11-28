<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);

        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    public function show($id)
    {
        $user = User::find($id);
        $memos = $user->memos()->orderBy('created_at', 'desc')->paginate(12);

        $data = [
            'user' => $user,
            'memos' => $memos,
        ];

        $data += $this->counts($user);

        return view('users.show', $data);
    }
    
    public function create()
    {
      
        return view('users.create');
    }
}
