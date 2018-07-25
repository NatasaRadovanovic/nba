<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Comment;
use App\User;

class CommentController extends Controller
{
    public function store($team_id)
    {
        $this->validate(request(), ['content' =>'required|min:10']); 
       
        Comment::create([
                    'content' => request('content'),
                    'team_id' => $team_id,
                    'user_id' => request('user_id'),
        
                ]);
                
        return back();
    }
}
