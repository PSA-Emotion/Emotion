<?php use App\Http\Controllers\PostsController ?>
@extends('layouts.app')

@section('content')
    <h1>Redaguoti įrašą</h1>
    <hr>
    <div class="row">
        <div class="col-md-8">

            {!! Form::model($post, ['route' => ['posts.update', $post->id]]) !!}

            {{Form::label('title', 'Pavadinimas')}}
            {{Form::text('title',$post->title, array('class'=>'form-control')) }}

            {{Form::label('body', 'Tekstas')}}
            {{Form::textarea('body', $post->body, array('id'=>'article-ckeditor','class'=>'form-control')) }}

            {{Form::submit('Sukurti', array('class'=>'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))}}

            {{Form::hidden('_method', 'PUT')}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
