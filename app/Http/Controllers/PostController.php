<?php

namespace App\Http\Controllers;

use App\Models\Post; // <-- ده الموديل
use App\Http\Requests\StorePostRequest; // الريكويست
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function show($id)
    {
        $post= Post::findorfail($id);

        return view('posts.show',['post'=>$post]);
    }


    public function search(Request $request)
    {
       $posts= Post::where
         ('description','like','%'.$request->search.'%')->
         orwhere('title','like','%'.$request->search.'%')->get();
        return view('posts.search',['posts'=>$posts]);
    }




    public function index()
    {
         $posts = Post::paginate(15);
        return view('posts.index',['posts'=>$posts]);
    }
     public function home()
    {
        $posts= Post::paginate(15);
        return view('home',['posts'=>$posts]);
    }

    public function create()
    {
        return view('posts.add');
    }

    public function edit($id)
    {
        $post=Post::findorfail($id);

        return view('posts.edit',['post'=>$post]);

    }


     public function update($id ,UpdatePostRequest $request)
    {
        $post=Post::findorfail($id);
       $post->update($request->validated()); // بدلاً من Validated()
        return redirect('posts')->with('success', 'Post updated successfully');
       // return view('posts.edit',['post'=>$post]);
    }



    public function store(StorePostRequest $request)
    {
        // بدل الـ dd، تقدر تعمل تخزين للموديل
        Post::create($request->validated());
        return redirect('posts')->with('success', 'Post created successfully');

    }
    public function destroy($id)
    {

        $post=Post::findorfail($id);
        $post->delete();
        return redirect()->back()->with('success', 'Post deleted successfully!');
    }
}
