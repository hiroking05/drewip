<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Topic;

class MemosController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $memos = $user->memos()->orderBy('created_at', 'desc')->paginate(10);
            
            $data = [
                'user' => $user,
                'memos' => $memos,
            ];
        }
        
        return view('welcome', $data);
    }
    
    public function create(Topic $topic)
    {   
        
        $data = [
            'topic' => $topic,
        ];
        
        
        return view('memos.create' , $data);
    }
    
    public function store(Request $request  ,$id)
    {
        $this->validate($request, [
            'content' => 'required|max:191',
        ]);

        $request->user()->memos()->create([
            'content' => $request->content,
            'topic_id' => $id,
        ]);
        $topic = Topic::find($id);
        $memos = $topic->memos()->orderBy('created_at', 'desc')->paginate(12);
        $user = $topic->user;
        $data = [
        'topic' => $topic,
        'memos' => $memos,
        'user' => $user,
        ];
        return view('topics.topicshow' , $data );
    }
    
    public function destroy($id)
    {
        $memo = \App\Memo::find($id);

        if (\Auth::id() === $memo->user_id) {
            $memo->delete();
        }
        return back();
    }
}
