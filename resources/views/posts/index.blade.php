@extends('layouts.app')

@section('content')
    <h1>Irašai</h1>
    @if(count($posts)>0)
         @foreach($posts as $post)
             <div class="card">
                 <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                 <small>Parasytas - {{$post->created_at}}</small>
             </div>
         @endforeach
        {{$posts->links()}}
    @else
        <p>Nera irašų</p>
    @endif

@endsection
