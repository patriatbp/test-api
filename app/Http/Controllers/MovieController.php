<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movie = \DB::table('movies')->get();
        return view('movies.index', compact('movie'));
    }

    public function store(Request $request){
        $query = \DB::table('movies')->insert([
            'titleType' => $request->titleType,
            'primaryTitle' => $request->primaryTitle,
            'originalTitle' => $request->originalTitle,
            'isAdult' => $request->isAdult,
            'startYear' => $request->startYear,
            'endYear' => $request->endYear,
            'runtimeMinutes' => $request->runtimeMinutes,
            'genres' => $request->genres
        ]);
        return redirect('/movies');
    }

    public function show($id){
        $movie = \DB::table('movies')->where('id', $id)->first();
        return view('movies.show', compact('movie'));      
    }

    public function update($id, Request $request){
        $query = \DB::table('movies')
            ->where('id', $id)
            ->update([
            'titleType' => $request->titleType,
            'primaryTitle' => $request->primaryTitle,
            'originalTitle' => $request->originalTitle,
            'isAdult' => $request->isAdult,
            'startYear' => $request->startYear,
            'endYear' => $request->endYear,
            'runtimeMinutes' => $request->runtimeMinutes,
            'genres' => $request->genres
            ]);
            return redirect('/movies');
    }

    public function destroy($id){
        $query = \DB::table('movies')->where('id', $id)->delete();
        return redirect('/movies');
    }
}
