@extends('layouts.app')

@section('content')
    <h1 class="text-center">Įrašai</h1>
    @if(count($posts)>0)
             @foreach($posts as $post)
                 @if($post->isRead())
             <div class="card" style="background-color: #60d58b">
                 @else
                     <div class="card">
                 @endif
                         <div class="row">
                     <div class="col-md-3 col-sm-4">
                         <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}">
                     </div>
                     <div class="col-md-9 col-sm-8">
                         @if($post->user->status == 'admin')
                         <h3><a href="/posts/{{$post->id}}">{{$post->title}} <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                     <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                 </svg></a></h3>
                         @elseif($post->user->status == 'vip')
                             <h3><a href="/posts/{{$post->id}}">{{$post->title}} <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                                         <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
                                         <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                                     </svg></a></h3>
                         @else
                             <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                             @endif
                         <small>Parasytas - {{$post->created_at}} || Autorius - {{$post->user->name}}</small>
                         <strong> || Patinka - {{$post->likes}}</strong>
                         <br>
                         <h5>Ispėjimų skaičius - {{$post->reports}}</h5>
                     </div>

                 </div>
             </div>
             @endforeach
        {{$posts->links()}}
    @else
        <p>Nera irašų</p>
    @endif

@endsection
