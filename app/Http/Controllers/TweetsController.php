<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class TweetsController extends Controller
{
    
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $tweets = $user->tweets()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'tweets' => $tweets,
            ];
            $data += $this->counts($user);
            return view('users.show', $data);
        }else {
            return view('welcome');
        }
    }
    
     public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:191',
        ]);

        $request->user()->tweets()->create([
            'content' => $request->content,
        ]);

        return redirect('/');
    }
    
    public function destroy($id)
    {
        $tweet = \App\Tweet::find($id);

        if (\Auth::user()->id === $tweet->user_id) {
            $tweet->delete();
        }

        return redirect()->back();
    }
}