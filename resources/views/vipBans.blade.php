@extends('layouts.vipPanel')

@section('content')
    <h1>Atblokavimo prašymai</h1>
    @if(count($bans)>0)
        <hr>
        <table class="table table-striped">
            <tr>
                <th>Pateiktas</th>
                <th>Vartotojo vardas</th>
                <th>Turinys</th>
                <th>Atitildyti</th>
                <th>Pašalinti</th>
            </tr>
            @foreach($bans as $ban)
                <tr>
                    <td>{{$ban->created_at}}</td>
                    <td>{{$ban->name}}</td>
                    <td>{{$ban->body}}</td>
                    <td><a href="/vip/{{$ban->user_id}}/unban" class="btn btn-success">Atblokuoti</a></td>
                    <td>
                        {!! Form::model($ban, ['route' => ['bans.destroy', $ban->id]]) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Ištrinti', array('class'=>'btn btn-danger'))}}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <h5>Kolkas prašymų nėra</h5>
    @endif
    {{$bans->links()}}
@endsection
