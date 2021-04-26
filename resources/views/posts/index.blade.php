@extends('layouts.app')

@section('content')
    <h1 class="text-center">Irašai</h1>
    @if(count($posts)>0)
         @foreach($posts as $post)
             <div class="card">
                 <div class="row">
                     <div class="col-md-3 col-sm-4">
                         <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}">
                     </div>
                     <div class="col-md-9 col-sm-8">
                         <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                         <small>Parasytas - {{$post->created_at}} || Autorius - {{$post->user->name}}</small>
                         <strong> || Patinka - {{$post->likes}}</strong>

                     </div>
                 </div>
             </div>
         @endforeach
        {{$posts->links()}}
    @else
        <p>Nera irašų</p>
    @endif

@endsection
