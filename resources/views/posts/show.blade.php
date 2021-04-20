@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-danger btn-lg btn-block">Grįžti</a>
    <h1>{{$post->title}}</h1>

    <div>
        {!!$post->body !!}
    </div>

    <hr>
    <small>Parasytas - {{$post->created_at}}</small>

    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-lg btn-block">Redaguoti</a>

    {!! Form::model($post, ['route' => ['posts.destroy', $post->id]]) !!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Ištrinti', array('class'=>'btn btn-danger btn-lg btn-block', 'style' => 'margin-top: 20px'))}}
    {!! Form::close() !!}

@endsection
