@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('crudpost.update', $post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label for="content">content</label>
                <input type="text" name="content" class="form-control" id="content" placeholder="content" value="{{$post->content}}">
            </div>
            <div class="form-group">
                <label for="image">image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="image" value="{{$post->image}}">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
