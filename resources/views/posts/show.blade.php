@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-lg btn-block btn-outline-primary">Grįžti</a>
    @if($post->user->status == 'admin')
    <h1 class="text-center">{{$post->title}} <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
        </svg></h1>
    @elseif($post->user->status == 'vip')
        <h1 class="text-center">{{$post->title}} <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
            </svg></h1>
    @else
        <h1 class="text-center">{{$post->title}}</h1>
        @endif

    <img style="width:20%;" class="text-center" src="/storage/cover_images/{{$post->cover_image}}">
    <br>
    <br>
    <div class="text-center">
        {!!$post->body !!}
    </div>

    <hr>
    <div class="text-center">
    <small>Parasytas - {{$post->created_at}} || Autorius - {{$post->user->name}} || Patinka - {{$post->likes}} || Ispėjimai - {{$post->reports}}</small>
    </div>
    <hr>

<div class="row">
    @if($post->isRead())
    <div class="col-md-4 text-right"><a href="#" class="btn btn-dark">Įrašas jau perskaitytas</a></div>
    @else
    <div class="col-md-4 text-right"><a href="/posts/{{$post->id}}/read" class="btn btn-success">Perskaičiau</a></div>
    @endif
    @if($post->isLiked())
    <div class="col-md-4 text-center"><a href="#" class="btn btn-dark">Įrašas jau patinka</a></div>
        @else
    <div class="col-md-4 text-center"><a href="/posts/{{$post->id}}/like" class="btn btn-success">Patinka</a></div>
        @endif
    @if(!$post->isReported())
        <div class="col-md-4"><a href="/posts/{{$post->id}}/report" class="btn btn-success">Pranešti apie įrašą</a></div>
        @else
            <div class="col-md-4"><a href="#" class="btn btn-dark">Apie įrašą jau pranešei!</a></div>
    @endif


</div>
    <div class="row pt-3">
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
    <div class="col-md-6 text-right"><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Redaguoti</a></div>
    <div class="col-md-6"> {!! Form::model($post, ['route' => ['posts.destroy', $post->id]]) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Ištrinti', array('class'=>'btn btn-danger'))}}
        {!! Form::close() !!}
    </div>
    </div>
    @endif
    @endif
@endsection
