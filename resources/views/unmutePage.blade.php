@extends('layouts.app')
@section('content')
    <h1>Siųsti prašymą atitildyti</h1>
    <h4>Apačioje pateikite aiškius argumentus, kodėl jums turi būti sugrąžinta galimybė rašyti įrašus. Moderatoriai peržvelgs ir jeigu pateninks jūsų prašymą, jūs būsite atitildytas.</h4>
    <hr>
    <div class="row">
        <div class="col-md-8">

            {!! Form::open(array('route' => 'mutes.store', 'enctype'=>'multipart/form-data')) !!}

            {{Form::textarea('body', ' ', array('id'=>'article-ckeditor','class'=>'form-control')) }}


            {{Form::submit('Siųsti', array('class'=>'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))}}

            {!! Form::close() !!}

        </div>
    </div>
@endsection
