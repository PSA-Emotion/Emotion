<?php use App\Http\Controllers\PostsController ?>
@extends('layouts.app')

@section('content')
    <h1>Sukurti įrašą</h1>
<hr>
    <div class="row">
        <div class="col-md-8">
    {!! Form::open(array('route' => 'posts.store', 'enctype'=>'multipart/form-data')) !!}

    {{Form::label('title', 'Pavadinimas')}}
    {{Form::text('title', null, array('class'=>'form-control')) }}

            {{Form::label('body', 'Tekstas')}}
            {{Form::textarea('body', null, array('id'=>'article-ckeditor','class'=>'form-control')) }}

            <div class="form-group mt-3">
                {{Form::file('cover_image')}}
            </div>

    {{Form::submit('Sukurti', array('class'=>'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))}}

    {!! Form::close() !!}
        </div>
    </div>
@endsection
