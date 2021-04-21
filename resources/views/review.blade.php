@extends('layouts.app')

@section('content')
    <h1>Siųsti atsiliepimą</h1>
    <hr>
    <div class="row">
        <div class="col-md-8">

            {!! Form::open(array('route' => 'review.store', 'enctype'=>'multipart/form-data')) !!}

            {{Form::label('title', 'Pavadinimas')}}
            {{Form::text('title',' ', array('class'=>'form-control')) }}

            {{Form::label('body', 'Tekstas')}}
            {{Form::textarea('body', ' ', array('id'=>'article-ckeditor','class'=>'form-control')) }}


            {{Form::submit('Siųsti', array('class'=>'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))}}

            {!! Form::close() !!}

        </div>
    </div>

@endsection
