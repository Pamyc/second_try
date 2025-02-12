@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('crudpost.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="title">
            </div>
            <div class="form-group">
                <label for="content">content</label>
                <input type="text" name="content" class="form-control" id="content" placeholder="content">
            </div>
            <div class="form-group">
                <label for="image">image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="image">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
