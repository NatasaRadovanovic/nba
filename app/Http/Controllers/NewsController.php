<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\News;
use App\Team;


class NewsController extends Controller
{
    

    public function index()
    {
        $news = News::with('user')->latest()->paginate(10);
       // $news = News::all();
        return view('news.index', compact('news')); 
    }

    public function show($id)
    {
        $new = News::find($id);
        return view('news.show', compact('new'));
    }

    

    public function showNewsForTeam($name)
    {
        $team = Team::where('name', $name)->first();
        $news = $team->news()->latest()->paginate(10);
        return view('news.index', compact('news'));
    }
}
