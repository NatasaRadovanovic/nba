<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Comment;
use App\User;
use Illuminate\Support\Facades\Mail; 
use App\Mail\CommentReceived; 

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('content', ['only' => 'store']);
    }
    
    public function store($id)
    {
        $this->validate(request(), ['content' =>'required|min:10']); 
       
        $team = Team::find($id);
          Comment::create([
                    'content' => request('content'),
                    'team_id' => $team->id,
                    'user_id' => auth()->user()->id,
        
                ]);

        Mail::to($team->email)->send(new CommentReceived($team));
                
                
        return back();
    }
}
