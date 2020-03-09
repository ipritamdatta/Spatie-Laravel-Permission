@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title: </label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="my-textarea">Text</label>
                <textarea id="my-textarea" class="form-control" name="body" rows="3"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection