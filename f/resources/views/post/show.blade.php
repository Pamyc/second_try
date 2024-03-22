@extends('layouts.main')
@section('content')
    <div>
        <div>{{ $post->id }}. {{ $post->title }}</div>
        <div>{{ $post->content }}</div>
    </div>
    <div>
        <a href="{{ route('crudpost.edit', $post->id) }}">Edit</a>
    </div>

    <div>
        <form action="{{ route('crudpost.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
    <div>
        <a href="{{ route('crudpost.index') }}">Back</a>
    </div>
@endsection
