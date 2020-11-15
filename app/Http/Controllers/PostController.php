<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $post = \DB::table('posts')->get();
        return view('posts.index', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|unique:posts',
            'body' => 'required',
        ]);
        $query = \DB::table('posts')->insert([
            "title" => $request["title"],
            "body" => $request["body"]
        ]);
        return redirect('/posts');
    }

    public function show($id){
        $post = \DB::table('posts')->where('id', $id)->first();
        return view('posts.show', compact('post'));      
    }

    public function edit($id){
        $post = \DB::table('posts')->where('id', $id)->first();
        return view('posts.edit', compact('post'));
    }

    public function update($id, Request $request){
        $request->validate([
            'title' => 'required|unique:posts',
            'body' => 'required',
        ]);

        $query = \DB::table('posts')
            ->where('id', $id)
            ->update([
                'title' => $request["title"],
                'body' => $request["body"]
            ]);
            return redirect('/posts');
    }

    public function destroy($id){
        $query = \DB::table('posts')->where('id', $id)->delete();
        return redirect('/posts');
    }
}
