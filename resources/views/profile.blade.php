@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">

                    <h2 class="text-center">Tavo profilis</h2>
                        @if(auth()->user()->muted == 1)
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <h4>Jūs užtildytas, galite teikti prašymą, jos galimybė rašyti įrašus vėl būtų suteikta</h4>
                            </div>
                            @if(!auth()->user()->unmuteRequestSent())
                            <div class="col-md-4">
                                <a href="/mutes" class="btn btn-warning">Teikti prašyma</a>
                            </div>
                            @else
                                <div class="col-md-4">
                                    <a href="#" class="btn btn-dark">Prašymas jau pateiktas!</a>
                                </div>
                            @endif
                        </div>
                        @endif
                        <hr>
                        <h4 class="text-center">Tavo progresas {{auth()->user()->progress}} %</h4>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: {{auth()->user()->progress}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <hr>

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
                                <h4><strong>Depresijos lygis - </strong></h4>
                                <h4><strong>Santykio su savimi lygis - </strong></h4>
                                <h4><strong>Nuovargio lygis - </strong></h4>
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
                                <h4>{{auth()->user()->depression_level}}</h4>
                                <h4>{{auth()->user()->relationship_level}}</h4>
                                <h4>{{auth()->user()->tired_level}}</h4>
                                <hr>
                                <a href="/depressionTest" class="btn btn-success" style="margin-bottom: 5px"><h4>Atlikti depresijos testą</h4></a>
                                <a href="/relationshipTest" class="btn btn-success" style="margin-bottom: 5px"><h4>Atlikti santykio su savimi testą</h4></a>
                                <a href="/tiredTest" class="btn btn-success" style="margin-bottom: 5px"><h4>Atlikti nuovargio testą</h4></a>
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
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Redaguoti</a></td>
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
