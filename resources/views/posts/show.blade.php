@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-danger btn-lg btn-block">Grįžti</a>
    <h1>{{$post->title}}</h1>

    <img style="width:20%" src="/storage/cover_images/{{$post->cover_image}}">
    <br>
    <br>
    <div>
        {!!$post->body !!}
    </div>

    <hr>
    <small>Parasytas - {{$post->created_at}} || Autorius - {{$post->user->name}}</small>

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

@endsection
