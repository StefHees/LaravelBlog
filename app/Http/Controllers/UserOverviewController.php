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
        foreach($users as $user){
            // Creates an associative array with the username as key and the posts as value
            $posts[$user->name] = $user->posts->where('user_id', $user->id);
        }
        return view('users.index')->with('data', $posts);
    }
}
