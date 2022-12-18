<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index(){
        return view('forum.index', [
            // 'forums' => Forum::all(),
            'users' => User::all(),
        ]);
    }

    public function show(){
        return view('forum.createForums',[
            'forums' => Forum::all(),
            'users' => User::all(),
        ]);
    }

    public function insert(Request $request){
        $request->validate([
            'name' => 'required'
        ]);

        $forum = new Forum;
        $forum->name = $request->input('name');
        $forum->save();

        return redirect('/forumForm');
    }

    public function delete($id){
        $forum = Forum::find($id);
        dd($forum);
        $forum->delete();

        return redirect('/forumForm');
    }
}
