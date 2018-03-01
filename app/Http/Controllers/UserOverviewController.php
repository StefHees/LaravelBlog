<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class UserOverviewController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index')->with('users', $users);
    }

    public function show($id)
    {
        $posts = Post::orderBy('created_at', 'desc')->where('user_id', $id)->paginate(10);
        return view('users.overview')->with('posts', $posts);
    }
}
