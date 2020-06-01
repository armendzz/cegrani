<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
               
        return view('admin/home');
    }

    public function category() {
               
        return view('admin.categories.index')->with('categories', Category::all());
    }
}
