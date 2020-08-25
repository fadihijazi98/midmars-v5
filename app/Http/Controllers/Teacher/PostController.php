<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostValidate;
use App\post;
use App\Http\Resources\PostsWeek as PostResources;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        return PostResources::collection(post::where('user_id', Auth::id())->get());
    }

    public function show(post $post)
    {
        return (new PostResources($post));
    }

    public function create()
    {
        //test ...
        return view('test.post.insert');
    }

    public function edit(post $post)
    {
        //test ...
        return view('test.post.show')->withPost($post);
    }

    public function store(PostValidate $request)
    {
        $this->authorize('create', post::class);
        $date = $request->validated();
        \request()->user()->posts()->create($date);
        return redirect('/post');
    }

    public function update(PostValidate $request, post $post)
    {
        $this->authorize('update', $post);
        $date = $request->validated();
        $post->update($date);
        return redirect('/post/'.$post->id);
    }

    public function destroy(post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();
        return redirect('/post');
    }

}
