@extends('layouts.app')
@section('content')
    <h2 class="text-center">Nuovargio testas</h2>
    <div>
        Kiekvienas žmogus susiduria su savijautos pakitimu, kurį jis apibūdina kaip nuovargį. Šis jausmas gali atsirasti dėl įvairaus pobūdžio intensyvaus darbo, mitybos sutrikimo, streso, įvairių cheminių medžiagų poveikio, radiacijos ir kitų veiksnių. Kasdienybėje dažniausi nuovargio sukėlėjai yra įvairūs fiziniai veiksniai – triukšmas, temperatūros svyravimai, nepatogi darbo vieta, didelis darbo krūvis, šviesos trūkumas ir pan. Sergantiesiems įvairiomis ligomis nuovargis yra dažnas ir nevienareikšmis. Vieni skundžiasi fiziniu nuovargiu, kiti – protiniu, dar kiti – bendru, bet jis visada pasireiškia kaip jausmas ir subjektyvus savo organizmo būklės įvertinimas.
        <strong>

        </strong>
        <br>
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
    {!! Form::model($user, ['route' => ['tired.update', $user->id], 'enctype'=>'multipart/form-data']) !!}

    <hr>
    <br>
    {{Form::label('one', 'Aš jaučiuosi stiprus', array('class' => 'awesome pl-5'))}}
    {{Form::select('one', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('two', 'Fiziškai aš jaučiuosi galįs padaryti daug', array('class' => 'awesome pl-5'))}}
    {{Form::select('two', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('three', 'Aš jaučiuosi labai aktyvus', array('class' => 'awesome pl-5'))}}
    {{Form::select('three', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('four', 'Aš jaučiuosi taip, lyg galėčiau padaryti viską', array('class' => 'awesome pl-5'))}}
    {{Form::select('four', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('five', 'Aš jaučiuosi kupinas jėgu per dieną', array('class' => 'awesome pl-5'))}}
    {{Form::select('five', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('six', 'Aš galvoju, kad per dieną padarau daug', array('class' => 'awesome pl-5'))}}
    {{Form::select('six', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('seven', 'Kai aš ką nors darau, galiu gerai sukaupti savo mintis', array('class' => 'awesome pl-5'))}}
    {{Form::select('seven', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('eight', 'Fiziškai aš galiu padaryti daug', array('class' => 'awesome pl-5'))}}
    {{Form::select('eight', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('nine', 'Aš jaučiuosi drąsiai, kai reikia ką nors daryti', array('class' => 'awesome pl-5'))}}
    {{Form::select('nine', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('ten', 'Aš manau, kad labai daug ką padarau per dieną', array('class' => 'awesome pl-5'))}}
    {{Form::select('ten', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('eleven', 'Aš galiu gerai susikaupti', array('class' => 'awesome pl-5'))}}
    {{Form::select('eleven', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('twelve', 'Aš esu pailsėjęs(-usi)', array('class' => 'awesome pl-5'))}}
    {{Form::select('twelve', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('thirteen', 'Man nereikia daug pastangų susikaupti', array('class' => 'awesome pl-5'))}}
    {{Form::select('thirteen', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('fourteen', 'Fiziškai aš jaučiuosi esantis(-i) geros būklės', array('class' => 'awesome pl-5'))}}
    {{Form::select('fourteen', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('fifteen', 'Aš turiu daug planų', array('class' => 'awesome pl-5'))}}
    {{Form::select('fifteen', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('sixteen', 'Aš negreitai pavargstu', array('class' => 'awesome pl-5'))}}
    {{Form::select('sixteen', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('seventeen', 'Aš galiu daug padaryti', array('class' => 'awesome pl-5'))}}
    {{Form::select('seventeen', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('eighteen', 'Aš jaučiuosi galįs padaryti viską', array('class' => 'awesome pl-5'))}}
    {{Form::select('eighteen', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('nineteen', 'Mano lengva koncentruoti mintis', array('class' => 'awesome pl-5'))}}
    {{Form::select('nineteen', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}
    <br>
    {{Form::label('twenty', 'Fiziškai aš jaučiuosi puikiai', array('class' => 'awesome pl-5'))}}
    {{Form::select('twenty', array('0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4 ))}}

    {{Form::submit('Pateikti', array('class'=>'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))}}

    {{Form::hidden('_method', 'PUT')}}

    {!! Form::close() !!}

@endsection
