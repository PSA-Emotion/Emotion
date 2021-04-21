@extends('layouts.app')

@section('content')
    <h1>Redaguoti pagrindini puslapi</h1>
    <hr>
    <div class="row">
        <div class="col-md-8">

            {!! Form::model($home, ['route' => ['homepage.update', $home->id], 'enctype'=>'multipart/form-data']) !!}

            {{Form::label('title', 'Pavadinimas')}}
            {{Form::text('title',' ', array('class'=>'form-control')) }}

            {{Form::label('body', 'Tekstas')}}
            {{Form::textarea('body', ' ', array('id'=>'article-ckeditor','class'=>'form-control')) }}

            <div class="form-group mt-3">
                {{Form::file('homepage_image')}}
            </div>

            {{Form::submit('Redaguoti pagrindinį puslapį', array('class'=>'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))}}

            {{Form::hidden('_method', 'PUT')}}
            {!! Form::close() !!}

        </div>
    </div>

@endsection
