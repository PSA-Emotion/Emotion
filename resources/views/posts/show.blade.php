@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-lg btn-block btn-outline-primary">Grįžti</a>
    <h1 class="text-center">{{$post->title}}</h1>

    <img style="width:20%;" class="text-center" src="/storage/cover_images/{{$post->cover_image}}">
    <br>
    <br>
    <div class="text-center">
        {!!$post->body !!}
    </div>

    <hr>
    <div class="text-center">
    <small>Parasytas - {{$post->created_at}} || Autorius - {{$post->user->name}} || Patinka - {{$post->likes}}</small>
    </div>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-lg btn-block">Redaguoti</a>

    {!! Form::model($post, ['route' => ['posts.destroy', $post->id]]) !!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Ištrinti', array('class'=>'btn btn-danger btn-lg btn-block', 'style' => 'margin-top: 20px'))}}
    {!! Form::close() !!}
            @endif
    @endif
<div class="row">
    <div class="col-md-6 text-right"><a href="/posts/{{$post->id}}/read" class="btn btn-success">Perskaičiau</a></div>
    <div class="col-md-6"><a href="/posts/{{$post->id}}/like" class="btn btn-success">Patinka</a></div>
    </div>
@endsection
