@extends('layouts.vipPanel')

@section('content')
    <h1 class="text-center">Visi įrašai</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="card" style="background-color:#f8a09c">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Parasytas - {{$post->created_at}} || Autorius - {{$post->user->name}} || Patinka - {{$post->likes}} || </small>
                        <strong>Ispėjimai - {{$post->reports}}</strong>
                        {!! Form::model($post, ['route' => ['vipPosts.destroy', $post->id]]) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Ištrinti įrašą', array('class'=>'btn btn-danger '))}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>Nera irašų</p>
    @endif

@endsection
