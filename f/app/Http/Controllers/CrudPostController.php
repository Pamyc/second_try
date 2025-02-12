<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CrudPostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
       return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        Post::create($data);
        return redirect()->route('crudpost.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        $post->update($data);
        return redirect()->route('crudpost.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('crudpost.index');
    }

//    public function delete()
//    {
//        $post = Post::withTrashed()->find(2);
//        $post->restore();
//        dd('delete');
//    }

    public function firstOrCreate()
    {

        $anotherPost = [
            'title' => 'anotherPost_content',
            'content' => 'anotherPost_content',
            'image' => 'anotherPost_image',
            'likes' => 52,
            'is_published' => 1,
        ];
        $post = Post::firstOrCreate([
            'title' => 'anotherPost_content'
        ],[
            'title' => 'anotherPost_content',
            'content' => 'anotherPost_content',
            'image' => 'anotherPost_image',
            'likes' => 52,
            'is_published' => 1,
            ]);
        dump($post->content);
        dd('finished');
    }

    public function updateOrCreate()
    {

        $anotherPost = [
            'title' => 'updateanotherPost_content',
            'content' => 'updateanotherPost_content',
            'image' => 'updateanotherPost_image',
            'likes' => 52,
            'is_published' => 1,
        ];
        $post = Post::updateOrCreate([
            'title' => 'anotherPost not _content'
        ],[
            'title' => 'anotherPost not _content',
            'content' => 'updateanotherPost_content',
            'image' => 'updateanotherPost_image',
            'likes' => 5112,
            'is_published' => 1,
        ]);
        dump($post->content);
        dd('finished');
    }
}
