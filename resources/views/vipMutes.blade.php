@extends('layouts.vipPanel')

@section('content')
    <h1>Atitildymo prašymai</h1>
    @if(count($mutes)>0)
        <hr>
        <table class="table table-striped">
            <tr>
                <th>Pateiktas</th>
                <th>Vartotojo vardas</th>
                <th>Turinys</th>
                <th>Atitildyti</th>
                <th>Pašalinti</th>
            </tr>
            @foreach($mutes as $mute)
                <tr>
                    <td>{{$mute->created_at}}</td>
                    <td>{{$mute->name}}</td>
                    <td>{{$mute->body}}</td>
                    <td><a href="/vip/{{$mute->user_id}}/unmute" class="btn btn-success">Atitildyti</a></td>
                    <td>
                        {!! Form::model($mute, ['route' => ['mutes.destroy', $mute->id]]) !!}
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
    {{$mutes->links()}}
@endsection
