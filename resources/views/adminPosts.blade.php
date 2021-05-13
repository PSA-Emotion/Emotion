@extends('layouts.adminPanel')

@section('content')
    <h1 class="text-center">Visi įrašai</h1>

    <form class="form-inline" method="GET">
        <div class="form-group mb-2">
            <label for="filter" class="col-sm-3 col-form-label">Paieška:</label>
            <input type="text" class="form-control" id="filter" name="filter" placeholder="Įrašo pavadinimas..." value="{{$filter}}">
        </div>
        <button type="submit" class="btn btn-success mb-2">Ieškoti</button>
    </form>

    <hr>

    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="card">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Parasytas - {{$post->created_at}} || Autorius - {{$post->user->name}} || Patinka - {{$post->likes}}</small>
                        {!! Form::model($post, ['route' => ['adminPosts.destroy', $post->id]]) !!}
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
