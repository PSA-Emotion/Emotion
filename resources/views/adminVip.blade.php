@extends('layouts.adminPanel')

@section('content')
    <h1>Moderatoriai</h1>
    <hr>
    <table class="table table-striped">
        <tr>
            <th>Vardas</th>
            <th>Email</th>
            <th>Statusas</th>
            <th>Pakeisti statusa</th>
        </tr>
        @foreach($users as $user)
            @if($user->status == 'vip')
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->status}}</td>
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
@endsection
