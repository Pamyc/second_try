<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts');
    }

    public function create()
    {
        $postsArr = [
            [
                'title' => 'Заголовок поста из phpstorm',
                'content' => 'Некоторый интересный контент',
                'image' => 'imageblabla.jpg',
                'likes' => 20,
                'is_published' => 1,
            ],
            [
                'title' => 'Другой заголовок поста из phpstorm',
                'content' => 'Другой интересный контент',
                'image' => 'anotherimageblabla.jpg',
                'likes' => 50,
                'is_published' => 1,
            ],
        ];

        foreach ($postsArr as $item)
        {
            Post::create($item);
        }
        dd('created');
    }

    public function update()
    {
        $post = Post::find(10);

        $post->update([
            'title' => 'update',
            'content' => 'update',
            'image' => 'update',
            'likes' => 1000,
            'is_published' => 0,
        ]);

        dd('update');

    }

    public function delete()
    {
        $post = Post::withTrashed()->find(2);
        $post->restore();
        dd('delete');
    }

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
