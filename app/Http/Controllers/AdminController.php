<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
               
        return view('admin/home');
    }

    public function category() {
               
        return view('admin.categories.index')->with('categories', Category::all());
    }

    public function post() {
               
        return view('admin.post.index')->with('post', Post::all());
    }

    public function postshto() {
               
        return view('admin.post.create');
    }

    public function postedit($id) {
        $post = Post::find($id);
        
        return view('admin.post.edit')->with('post', $post);
    }

    public function trashed() {
           
        return view('admin.post.trashed')->with('post', Post::onlyTrashed()->get());
    }
}
