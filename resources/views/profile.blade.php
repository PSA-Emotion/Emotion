@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">

                    <h3 class="text-center pb-5">Tavo profilis</h3>
                        <div class="row">
                            <div class="col-md-4">

                                <img style="width:50%" src="/storage/profile_images/{{auth()->user()->profile_image}}" class="rounded mx-auto d-block">

                            </div>
                            <div class="col-md-4">
                                <h4><strong>Vartotojo vardas - </strong></h4>
                                <h4><strong>Vartotojo ID - </strong></h4>
                                <h4><strong>El. paštas - </strong></h4>
                                <h4><strong>Įrašų skaičius - </strong></h4>
                                <h4><strong>Profilis sukurtas - </strong></h4>
                                <h4><strong>Vartotojo statusas - </strong></h4>
                                <hr>
                                <small>Pasirinkti profilio nuotrauka</small>
                                {!! Form::open(['route' => ['users.update', auth()->user()->id ], 'enctype'=>'multipart/form-data']) !!}
                                {{Form::file('profile_image')}}
                                {{Form::submit('Ikelti', array('class'=>'btn btn-info', 'style' => 'margin-top: 5px'))}}
                                {{Form::hidden('_method', 'PUT')}}
                                {!! Form::close() !!}
                            </div>
                            <div class="col-md-4">
                                <h4>{{auth()->user()->name}}</h4>
                                <h4>{{auth()->user()->id}}</h4>
                                <h4>{{auth()->user()->email}}</h4>
                                <h4>{{count($posts)}}</h4>
                                <h4>{{auth()->user()->created_at}}</h4>
                                <h4>{{auth()->user()->status}}</h4>
                                <hr>
                            </div>
                        </div>
                        <hr>
                        @if(count($posts)>0)
                        <h3 class="pt-5">Tavo įrašai</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>Pavadinimas</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}" class="btn btn-success">Peržiūrėti</a></td>
                                    <td><a href="/post/{{$post->id}}/edit" class="btn btn-primary">Redaguoti</a></td>
                                    <td>
                                        {!! Form::model($post, ['route' => ['posts.destroy', $post->id]]) !!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Ištrinti', array('class'=>'btn btn-danger'))}}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            @else
                            <h1>Įrašų nėra</h1>
                                @endif
                        </table>
                    </div>
                </div>
            </div>
    </div>
@endsection
