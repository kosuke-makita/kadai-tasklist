<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // add

class UsersController extends Controller
{
    public function index()
    {
        $$users = User::paginate(1);
        
        return view('users.index', [
            'users' => $users,
        ]);
    }
    
       public function show($id)
    
    {
        $user = User::find($id);
        $tweets = $user->tweets()->orderBy('created_at', 'desc')->paginate(10);

        $data = [
            'user' => $user,
            'tweets' => $tweets,
        ];

        $data += $this->counts($user);

        return view('users.show', $data);
    }

}



