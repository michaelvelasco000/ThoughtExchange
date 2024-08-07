<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //admin
    public function index(){
      
        $posts = Post::where('userId','=', Auth()->user()->id)->get();
        return view('admin.post.home', ['posts' => $posts]);
    }

  
    public function create(){
        return view('admin.post.create');  
    }
   
    public function save(Request $request){
        $save = $request->validate(
            [
                'userId'=> 'required',
                'title'=>'required',
                'description'=> 'required',
            ]

        );
        $data = Post::create($save);
        if($data){
            session()->flash('success', 'Post Add Successfully');
            return redirect(route('admin/post'));
        }else{
            session()->flash('error', 'Post Failed!');
            return redirect(route('admin/post'));
        }
    }
    public function edit($id){
        $post = Post::findOrFail($id);
        return view('admin.post.edit', ['post' => $post]);
    }
    public function delete($id){
        $post = Post::findOrFail($id)->delete();
        session()->flash('success', 'Post Delete Successfully');
        return redirect(route('admin/post'));
    }
    public function update($id, Request $request){
        $post = Post::findOrFail($id);
        $title = $request->title;
        $description = $request->description;
        $userId = $request->userId;
       
        $post->title = $title;
        $post->description = $description;
        $post->userId = $userId;
        $post->save();
        return redirect(route('admin/post'));
    }

    //user details
    public function userindex(){
      
        $posts = Post::where('userId','=', Auth()->user()->id)->get();
        return view('user.post.home', ['posts' => $posts]);
    }
    public function usercreate(){
        return view('user.post.create');  
    }
    public function usersave(Request $request){
        $save = $request->validate(
            [
                'userId'=> 'required',
                'title'=>'required',
                'description'=> 'required',
            ]

        );
        $data = Post::create($save);
        if($data){
            session()->flash('success', 'Post Add Successfully');
            return redirect(route('user/post'));
        }else{
            session()->flash('error', 'Post Failed!');
            return redirect(route('user/post'));
        }
    }
    public function useredit($id){
        $post = Post::findOrFail($id);
        return view('user.post.edit', ['post' => $post]);
    }
    public function userdelete($id){
        $post = Post::findOrFail($id)->delete();
        session()->flash('success', 'Post Delete Successfully');
        return redirect(route('user/post'));
    }
    public function userupdate($id, Request $request){
        $post = Post::findOrFail($id);
        $title = $request->title;
        $description = $request->description;
        $userId = $request->userId;
       
        $post->title = $title;
        $post->description = $description;
        $post->userId = $userId;
        $post->save();
        return redirect(route('user/post'));
    }
}
