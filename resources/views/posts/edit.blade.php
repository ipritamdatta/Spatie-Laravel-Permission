@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {{-- @foreach($posts as $post) --}}
            <form action="{{URL::to('post/'.$posts->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="title">Title: </label>
                <input name="title" type="text" class="form-control" id="title" value="{{$posts->title}}">
                </div>
                <div class="form-group">
                    <label for="my-textarea">Text</label>
                    <textarea id="my-textarea" class="form-control" name="body" rows="3">{{$posts->body}}</textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        {{-- @endforeach --}}
    </div>
</div>
@endsection