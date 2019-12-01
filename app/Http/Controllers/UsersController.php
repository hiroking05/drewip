<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Topic;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(12);

        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    public function show($id)
    {
        $user = User::find($id);
        $memos = $user->memos()->orderBy('created_at', 'desc')->paginate(12);
        $followings = $user->followings()->paginate(12);
        
        $data = [
            'user' => $user,
            'memos' => $memos,
            'users' => $followings,
        ];

        $data += $this->counts($user);

        return view('users.show', $data);
    }
    
    public function create()
    {
      
        return view('users.create');
    }
    
    public function followings($id)
    {
        $user = User::find($id);
        $followings = $user->followings()->paginate(10);

        $data = [
            'user' => $user,
            'users' => $followings,
        ];

        $data += $this->counts($user);

        return view('users.followings', $data);
    }

    public function followers($id)
    {
        $user = User::find($id);
        $followers = $user->followers()->paginate(10);

        $data = [
            'user' => $user,
            'users' => $followers,
        ];

        $data += $this->counts($user);

        return view('users.followers', $data);
    }
}
