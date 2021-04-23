@extends('layouts.app')

@section('content')
    <div class="jumbotron" style="background-color:#3dbdc2 ">
        <h1 class="display-4 ">Sveiki atvyke!</h1>
        <p class="lead">Cia yra aprasymas.</p>
        <hr class="my-4">
        <p>Cia irgi yra aprasymas</p>
        <p class="lead">
            <span class="row"></span>
            <a class="btn btn-primary btn-lg" style="background-color: #C2423D" href="{{ route('register') }}" role="button">Registruotis</a>
            <a class="btn btn-primary btn-lg" style="background-color: #C2423D" href="/first" role="button">Sužinok daugiau</a>
            </span>
        </p>
    </div>
@endsection
