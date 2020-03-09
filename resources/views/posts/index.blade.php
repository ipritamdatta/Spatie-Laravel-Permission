@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex flex-wrap justify-content-end">
        <div class="card">
            @role('writer|admin')
            <div class="card-body">
                <a href="{{route('post.create')}}">Create</a>
            </div>
            @endrole
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                    <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->body}}</td>
                        <td>
                        @can('edit post')
                            <a href="{{route('post.edit',$post['id'])}}">Edit</a>
                        @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
