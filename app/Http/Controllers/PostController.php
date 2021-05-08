<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $menu = ['Home','Create',  'Blog', 'Single-Page', 'About'];
        $posts = Post::all();
        return view('posts.index', ['posts'=>$posts, 'menu'=>$menu]);
    }

    public function show($id)
    {
        $menu = ['Home', 'Create', 'Blog', 'Single-Page', 'About'];
        $post = Post::findOrFail($id);
        return view('single-post', ['post' => $post, 'menu'=>$menu]);
    }

    public function create(){
        $menu = ['Home', 'Create', 'Blog', 'Single-Page', 'About'];
        return view('posts.create', [ 'menu'=>$menu]);
    }
    public function store(Request $request){
        $post = new Post();
        $post->title = $request->input('title');
        $post->image = $request->input('image');
        $post->body = $request->input('body');
//        $post->title ='Hello';
        $post->save();
        return view('index',['success'=>'Succesufully added']);
    }
}
