@extends('layouts.vipPanel')
@section('content')
    <h1>Moderatoriaus panelė</h1>
    <hr>
    <h1>Vartotojai</h1>
    <hr>
    <table class="table table-striped">
        <tr>
            <th>Vardas</th>
            <th>Email</th>
            <th>Progresas</th>
            <th>Depresijos lygis</th>
            <th>Santykio lygis</th>
            <th>Nuovargio lygis</th>
            <th>Užblokuoti</th>
            <th>Užtildyti</th>
        </tr>
        @foreach($users as $user)
            @if($user->status == 'guest')
                @if($user->banned == 1 || $user->muted == 1 )
                <tr style="background-color: #f8a09c">
                    @else
                        <tr>
                            @endif
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->progress}}%</td>
                    <td>{{$user->depression_level}}</td>
                    <td>{{$user->relationship_level}}</td>
                    <td>{{$user->tired_level}}</td>
                    <td>
                        @if($user->banned == 1)
                            <a href="/vip/{{$user->id}}/unban" class="btn btn-success">Atblokuoti</a>
                         @else
                            <a href="/vip/{{$user->id}}/ban" class="btn btn-danger">Užblokuoti</a>
                            @endif
                    </td>
                            <td>
                                @if($user->muted == 1)
                                    <a href="/vip/{{$user->id}}/unmute" class="btn btn-success">Atitildyti</a>
                                @else
                                    <a href="/vip/{{$user->id}}/mute" class="btn btn-danger">Užtildyti</a>
                                @endif
                            </td>
                </tr>
            @endif
        @endforeach
    </table>
    @endsection
