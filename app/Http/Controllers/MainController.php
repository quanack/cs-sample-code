<?php

namespace App\Http\Controllers;

use App\Models\Bookmarks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class MainController extends Controller
{
    public function index()
    {
        return view('main');
    }

    public function addbookmark()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'url'   => 'required|url',
        ]);

        $attributes['user_id'] = auth()->id();

        Bookmarks::create($attributes);
        return redirect('/')->with('success', 'Bookmark added!');
    }
}
