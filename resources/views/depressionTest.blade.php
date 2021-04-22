@extends('layouts.app')
@section('content')
    <h2 class="text-center">Depresijos testas</h2>
    <div>
        <strong>
            Burnso depresijos skalė yra patikimas įrankis nuotaikoms įvertinti, ji padeda nustatyti depresiją ir jos sunkumo laipsnį.
        </strong>
        Burnso depresijos skalę galite drąsiai naudoti savo būklei įvertinti ir pamatyti realią dabartinę padėtį.

        Atidžiai perskaitykite kiekvieną teiginį ir kiekvieną atsakymą įvertinkite vienu iš balų (arba tiesiog paukščiuku, jei lentelę spausdinsite):
        <br>
        0 – Visai ne
        <br>
        1 – Retai
        <br>
        2 – Vidutiniškai
        <br>
        3 – Dažnai
        <br>
        4 – Labai dažnai
    </div>
    <hr>
    {!! Form::model($user, ['route' => ['tests.update', $user->id], 'enctype'=>'multipart/form-data']) !!}

    {{Form::label('', 'MINTYS IR JAUSMAI', array('class' => 'awesome pl-5'))}}
    <hr>
    <br>
    {{Form::label('one', 'Liūdnas ar be nuotaikos', array('class' => 'awesome pl-5'))}}
    {{Form::select('one', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('two', 'Nelaimingas arba nusiminęs', array('class' => 'awesome pl-5'))}}
    {{Form::select('two', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('three', 'Verkimo priepuoliai arba verksmingumas', array('class' => 'awesome pl-5'))}}
    {{Form::select('three', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('four', 'Netekęs pasitikėjimo savo jėgomis', array('class' => 'awesome pl-5'))}}
    {{Form::select('four', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('five', 'Beviltiškumo jausmas', array('class' => 'awesome pl-5'))}}
    {{Form::select('five', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('six', 'Žema savivertė', array('class' => 'awesome pl-5'))}}
    {{Form::select('six', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('seven', 'Jausmas, kad esu prastesnis ar menkesnis nei kiti', array('class' => 'awesome pl-5'))}}
    {{Form::select('seven', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('eight', 'Kaltė arba gėda', array('class' => 'awesome pl-5'))}}
    {{Form::select('eight', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('nine', 'Polinkis save kritikuoti arba kaltinti', array('class' => 'awesome pl-5'))}}
    {{Form::select('nine', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('ten', 'Sunkumai priimant sprendimus', array('class' => 'awesome pl-5'))}}
    {{Form::select('ten', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    <hr>
    {{Form::label('', 'VEIKLA IR ASMENIAI SANTYKIAI', array('class' => 'awesome pl-5'))}}
    <hr>
    <br>
    {{Form::label('eleven', 'Dingęs susidomėjimas šeima, draugais ar kolegomis', array('class' => 'awesome pl-5'))}}
    {{Form::select('eleven', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('twelve', 'Vienišumo jausmas', array('class' => 'awesome pl-5'))}}
    {{Form::select('twelve', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('thirteen', 'Mažiau laiko praleidžiama su šeima ar draugais', array('class' => 'awesome pl-5'))}}
    {{Form::select('thirteen', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('fourteen', 'Motyvacijos praradimas', array('class' => 'awesome pl-5'))}}
    {{Form::select('fourteen', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('fifteen', 'Dingęs susidomėjimas darbu bei kita veikla', array('class' => 'awesome pl-5'))}}
    {{Form::select('fifteen', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('sixteen', 'Darbo bei kitokios veiklos vengimas', array('class' => 'awesome pl-5'))}}
    {{Form::select('sixteen', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('seventeen', 'Prarastas malonumo ar pasitenkinimo gyvenimu jausmas', array('class' => 'awesome pl-5'))}}
    {{Form::select('seventeen', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    <hr>
    {{Form::label('', 'FIZINIAI SIMPTOMAI', array('class' => 'awesome pl-5'))}}
    <hr>
    <br>
    {{Form::label('eighteen', 'Nuovargis', array('class' => 'awesome pl-5'))}}
    {{Form::select('eighteen', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('nineteen', 'Sunkiai užmiegu arba pernelyg daug miegu', array('class' => 'awesome pl-5'))}}
    {{Form::select('nineteen', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('twenty', 'Nukritęs arba labai padidėjęs apetitas', array('class' => 'awesome pl-5'))}}
    {{Form::select('twenty', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('twentyone', 'Dingęs seksualinis potraukis', array('class' => 'awesome pl-5'))}}
    {{Form::select('twentyone', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('twentytwo', 'Susipūpinimas sveikata', array('class' => 'awesome pl-5'))}}
    {{Form::select('twentytwo', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    <hr>
    {{Form::label('', 'POLINKIS Į SAVIŽUDYBĘ**', array('class' => 'awesome pl-5'))}}
    <hr>
    <br>
    {{Form::label('twentythree', 'Ar turite minčių apie savižudybę?', array('class' => 'awesome pl-5'))}}
    {{Form::select('twentythree', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('twentyfour', 'Ar norėtumėte baigti savo gyvenimą?', array('class' => 'awesome pl-5'))}}
    {{Form::select('twentyfour', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('twentyfive', 'Ar turite planų fiziškai save žaloti?', array('class' => 'awesome pl-5'))}}
    {{Form::select('twentyfive', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::submit('Pateikti', array('class'=>'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))}}

    {{Form::hidden('_method', 'PUT')}}

    {!! Form::close() !!}

@endsection
