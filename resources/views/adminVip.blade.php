@extends('layouts.adminPanel')

@section('content')
    <h1>Moderatoriai</h1>
    <hr>
    <h3>Moderatorių panelės prašymai</h3>
    <div class="row">
        <div class="pl-3"><a href="/vipMutes" class="nav-link btn btn-primary">Atitildymo prašymai</a></div>
        <div class="pl-3"><a href="#" class="nav-link btn btn-primary">Atblokavimo prašymai</a></div>
    </div>
    <hr>
    <table class="table table-striped">
        <tr>
            <th>Vardas</th>
            <th>Email</th>
            <th>Statusas</th>
            <th>Progresas</th>
            <th>Santykio lygis</th>
            <th>Nuovargio lygis</th>
            <th>Pakeisti statusa</th>
            <th>Pakeisti statusa</th>
        </tr>
        @foreach($users as $user)
            @if($user->status == 'vip')
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->status}}</td>
                <td>{{$user->progress}}%</td>
                <td>{{$user->depression_level}}</td>
                <td>{{$user->relationship_level}}</td>
                <td>{{$user->tired_level}}</td>
                <td>
                    {!! Form::model($user, ['route' => ['status.update', $user->id]]) !!}
                    {{Form::select('status', ['guest' => 'guest', 'vip' => 'vip', 'admin' => 'admin'])}}
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Keisti', array('class'=>'btn btn-danger'))}}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endif
        @endforeach
    </table>
    {{$users->links()}}
@endsection
