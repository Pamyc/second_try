@extends('layouts.main')
@section('content')
    <div>
        <div>
            <a href="{{ route('crudpost.create') }}" class="btn btn-primary mb-3">Add one</a>
        </div>
        @foreach($posts as $post)
            <div><a href="{{ route('crudpost.show', $post->id) }}">{{ $post->id }}. {{ $post->title }}</a></div>
        @endforeach
    </div>
@endsection
