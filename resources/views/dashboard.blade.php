@extends('layouts.app')

@section('content')
    @if(auth()->user()->banned == 0)
    <img style="width:100%; heigth:50%" class="text-center" src="/storage/homepage_images/{{$home->homepage_image}}">
    <br>
    <br>
<h1 class="text-center">{{$home->title}}</h1>
    <br>
    <br>
    <p>{{$home->body}}</p>
    @else
    <h1 class="text-center">Jūs easate užblokuotas</h1>
    <hr>
    <h4 class="text-center">
        Už blogą elgesį kuris neatitinaka mūsų nustatytų taisyklių jūs buvote pašalintas iš vartotojų sąrašo.. Apačioje galite pildyti prašymą kurį puslpaio Moderatoriai patvirtins arba atmes per ateinančias keletą dienų. Linkime sėkmės!
    </h4>
    <hr>
    <div class="text-center">
        <a href="#" class="btn btn-outline-primary">Pildyti prašymą</a>
    </div>
    @endif
@endsection

