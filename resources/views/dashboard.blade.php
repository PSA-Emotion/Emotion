@extends('layouts.app')

@section('content')
    <img style="width:100%;" class="text-center" src="/storage/homepage_images/{{$home->homepage_image}}">
    <br>
    <br>
<h1 class="text-center">{{$home->title}}</h1>
    <br>
    <br>
    <p>{{$home->body}}</p>
@endsection

