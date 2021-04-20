@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4 ">Sveiki atvyke!</h1>
        <p class="lead">Cia yra aprasymas.</p>
        <hr class="my-4">
        <p>Cia irgi yra aprasymas</p>
        <p class="lead">
            <span class="row"></span>
            <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Registruotis</a>
            <a class="btn btn-primary btn-lg" href="/first" role="button">Sužinok daugiau</a>
            </span>
        </p>
    </div>
@endsection
