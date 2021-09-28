<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;

class BlogController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function store(Request $request){
        $validator = $this->validate($request , ['title' => 'required|exists:blogs,created_at']);
        if($validator){
            blog::create($request->all());
        }
        return back()->with('success','blog created');
    }
}
