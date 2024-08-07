<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        // Use the query builder to perform a left join
        $posts = Post::leftJoin('users', 'posts.userId', '=', 'users.id')
                     ->select('posts.*', 'users.name')
                     ->inRandomOrder() // Select the post fields and the user's name
                     ->get();
        
        return view('admin.dashboard', [
            'posts' => $posts,
        ]);
    }
    public function userindex(){

        // Use the query builder to perform a left join
        $posts = Post::leftJoin('users', 'posts.userId', '=', 'users.id')
                     ->select('posts.*', 'users.name')
                     ->inRandomOrder() // Select the post fields and the user's name
                     ->get();
        
        return view('user.dashboard', [
            'posts' => $posts,
        ]);
    }
    public function welcome(){
        $posts = Post::leftJoin('users', 'posts.userId', '=', 'users.id')
        ->select('posts.*', 'users.name') // Select the post fields and the user's name
        ->inRandomOrder()
        ->limit(3) // Limit the results to 3
        ->get();
        
        return view('welcome', [
            'posts' => $posts,
        ]);
    }
}
