<?php

namespace App\Http\Controllers;

use App\Models\Post; // <-- ده الموديل
use App\Http\Requests\StorePostRequest; // الريكويست
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function index()
    {
        $posts= Post::all();
        return view('posts.index',['posts'=>$posts]);
    }

    public function create()
    {
        return view('posts.add');
    }

    public function edit()
    {
        return view('posts.edit');
    }

    public function store(StorePostRequest $request)
    {
        // بدل الـ dd، تقدر تعمل تخزين للموديل
        Post::create($request->validated());

        return redirect()->back()->with('success', 'Post created successfully!');
    }
    public function destroy($id)
    {

        $post=Post::findorfail($id);
        $post->delete();
        return redirect()->back()->with('success', 'Post deleted successfully!');
    }
}
