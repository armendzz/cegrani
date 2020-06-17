<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Post;
use App\Category;
use Illuminate\Support\Facades\Storage;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = date('Y-m-d');
        return view('post/index')->with('date', $date);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post/create')->with('categories', Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        $image = $request->image->store('posts', 'public');
        

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image,
            'category_id' => $request->category
        ]);

            session()->flash('sukses', 'Artikulli u shtua me sukses');
            return redirect(route('adminpost'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('post/show')->with('post', $post);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        
        return view('post.edit')->with('post', $post)->with('categories', Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, $id)
    {   
        $post = Post::find($id);
        $data = $request->only(['title', 'content', 'image', 'category']);
       
       if ($request->hasFile('image')){
          $image = $request->image->store('posts', 'public');
          $data['image'] = $image;
       }
        $post->category_id = $request->category;
        $post->update($data);
        session()->flash('sukses', 'Posti u ndryshua me sukses');
        return redirect('/post/'. $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::withTrashed()->where('id', $id)->firstOrFail();
        if ($post->trashed()){
            $post->forceDelete();
            session()->flash('sukses', 'Posti u fshi nga database');
        } else {
            $post->delete();
            session()->flash('sukses', 'Posti u dergua ne trash');
        }

        
        return redirect(route('adminpost'));
    }
}
