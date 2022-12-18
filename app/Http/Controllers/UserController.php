<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        return view('forum.insertUser');
    }

    public function insert(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        return redirect('forum');
    }

    public function insertForum(Request $request){

    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        dd($user);

        return redirect('forum');
    }
}
