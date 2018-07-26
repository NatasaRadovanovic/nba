<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\News;

class NewController extends Controller
{
    public function create()
    {
        return view('news.index');
    }

    public function index()
    {
        $news = News::with('user')->latest()->paginate(10);
       // $news = News::all();
        return view('news.index', compact('news')); 
    }

    public function show($id)
    {
        $new = News::with('user')->find($id);
        return view('news.show', compact('new'));
    }
}
