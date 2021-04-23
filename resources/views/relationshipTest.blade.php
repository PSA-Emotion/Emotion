@extends('layouts.app')
@section('content')
    <h2 class="text-center">"Ar sutari pats su savimi?" testas</h2>
    <div>
        Kartais ateina metas išsiaiškinti, ar sutariate su pačiu savimi. Šie klausimai bus pirmasis žingsnis į suvokimą, ar Jūsų nekankina emocinės ir dvasinės tuštumos jausmas. Dėl to, prieš atsakydami, gerai apgalvokite kiekvieną teiginį ir būkite sąžiningi patys sau.
        <strong>
            Kaip jis apibūdina Jūsų jausmus:
        </strong>
        <br>
        0 – Labai dažnai
        <br>
        1 – Dažnai
        <br>
        2 – Kartais
        <br>
        3 – Retai arba niekada
    </div>
    {!! Form::model($user, ['route' => ['relationship.update', $user->id], 'enctype'=>'multipart/form-data']) !!}
    <hr>
    <br>
    {{Form::label('one', 'Man sunku būti vienam ir nieko neveikti. Aš būtinai turiu įjungti radiją ar televizorių, būti su kuo nors kartu arba kažkuo užsiimti.', array('class' => 'awesome pl-5'))}}
    {{Form::select('one', array('0' => 0, '4' => 1, '8' => 2, '10' => 3))}}
    <br>
    {{Form::label('two', 'Aš neturiu aiškaus tikslo gyvenime ir jaučiu, kad apskritai nežinau, ką veikiu šioje žemėje.', array('class' => 'awesome pl-5'))}}
    {{Form::select('two', array('0' => 0, '4' => 1, '8' => 2, '10' => 3))}}
    <br>
    {{Form::label('three', 'Aš nesu tikras, kokios mano pagrindinės vertybės bei įsitikinimai, ir ne visada žinau, kas yra gerai ir kas blogai.', array('class' => 'awesome pl-5'))}}
    {{Form::select('three', array('0' => 0, '4' => 1, '8' => 2, '10' => 3))}}
    <br>
    {{Form::label('four', 'Aš niekada savęs nepamaloninu mėgiamu valgiu, kelione, puošniu drabužiu ir pan. Aš darau tai tik dėl kitų.', array('class' => 'awesome pl-5'))}}
    {{Form::select('four', array('0' => 0, '4' => 1, '8' => 2, '10' => 3))}}
    <br>
    {{Form::label('five', 'Aš jaučiuosi nepatogiai, galvodamas arba kalbėdamas apie tai, kas man yra gyvenimo prasmė, mirtis, religija, mano vaikystė ir pan.', array('class' => 'awesome pl-5'))}}
    {{Form::select('five', array('0' => 0, '4' => 1, '8' => 2, '10' => 3))}}
    <br>
    {{Form::label('six', 'Aš mėgstu prognozuoti ir kontroliuoti situacijas. Netikėti pasikeitimai man sukelia paniką.', array('class' => 'awesome pl-5'))}}
    {{Form::select('six', array('0' => 0, '4' => 1, '8' => 2, '10' => 3))}}
    <br>
    {{Form::label('seven', 'Aš nuolat lyginu save ir savo gyvenimą su kitų žmonių laime ir pasiekimu. Yra daugybė žmonių, su kuriais aš norėčiau pasikeisti vietomis.', array('class' => 'awesome pl-5'))}}
    {{Form::select('seven', array('0' => 0, '4' => 1, '8' => 2, '10' => 3))}}
    <br>
    {{Form::label('eight', 'Geriausiai jaučiuosi, kai mano laikas suplanuotas, o veiksmai numatyti iš anksto. Teikiu pirmenybe struktūrai, o ne spontaniškumui.', array('class' => 'awesome pl-5'))}}
    {{Form::select('eight', array('0' => 0, '4' => 1, '8' => 2, '10' => 3))}}
    <br>
    {{Form::label('nine', 'Man labai sunku priimti kitų dovanas ir komplimentus, pagirti save už gerai atliktą darbą arba pasitikėti tuo, kad kiti mane iš tiesų myli.', array('class' => 'awesome pl-5'))}}
    {{Form::select('nine', array('0' => 0, '4' => 1, '8' => 2, '10' => 3))}}
    <br>
    {{Form::label('ten', 'Netgi tada, kai esu mylimas ir su manimi atsitinka daug malonių dalykų, man sunku tuo patikėti ir tai priimti.', array('class' => 'awesome pl-5'))}}
    {{Form::select('ten', array('0' => 0, '4' => 1, '8' => 2, '10' => 3))}}
    <br>
    <hr>
    {{Form::submit('Pateikti', array('class'=>'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))}}

    {{Form::hidden('_method', 'PUT')}}

    {!! Form::close() !!}

@endsection
