<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Topic;

class TopicsController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $topics = $user->topics()->orderBy('created_at', 'desc')->paginate(12);
            
            $data = [
                'user' => $user,
                'topics' => $topics,
            ];
        }
        
        return view('users.topicslist', $data);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
        ]);

        $request->user()->topics()->create([
            'name' => $request->name,
        ]);

        return back();
    }
    
    public function create()
    {
      if (\Auth::id() === $topic->user_id) {
        return view('users.create');}
        else {
            return redirect('/');}
    }
    
    public function destroy($id)
    {
        $topic = \App\Topic::find($id);

        if (\Auth::id() === $topic->user_id) {
            $topic->delete();
        }
        
        return redirect()->route('topics.index');
    }
    
    public function show($id)
    {
        $topic = Topic::find($id);
        $user = $topic->user;
        $memos = $topic->memos()->orderBy('created_at', 'desc')->paginate(12);
        
        if (\Auth::id() === $topic->user_id) {
        
       $data = [
            'topic' => $topic,
            'user' => $user,
            'memos' => $memos,
        ];

        return view('topics.topicshow', $data);}
        
        else {
            return redirect('/');
        }
    }
}
