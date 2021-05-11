@extends('layouts.adminPanel')

@section('content')
    <h1>Admin panele</h1>
    <hr>
    <br>
    <br>
    <br>
    <br>
    <br>
    <hr>
    <h3>Vartotojų atsiliepimai</h3>
    @if(count($reviews)>0)
    <hr>
    <table class="table table-striped">
        <tr>
            <th>Pateiktas</th>
            <th>Pavadinimas</th>
            <th>Turinys</th>
            <th>Pašalinti</th>
        </tr>
        @foreach($reviews as $review)
                <tr>
                    <td>{{$review->created_at}}</td>
                    <td>{{$review->title}}</td>
                    <td>{{$review->body}}</td>
                    <td>
                        {!! Form::model($review, ['route' => ['review.destroy', $review->id]]) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Ištrinti', array('class'=>'btn btn-danger'))}}
                        {!! Form::close() !!}
                    </td>
                </tr>
        @endforeach
    </table>
        @else
            <h5>Kolkas atsiliepimų nėra</h5>
            @endif
    {{$reviews->links()}}
@endsection
