@extends('layouts.main')
@section('title',  'HDC Events')
@section('content')

    <h1>Algum titulo</h1>
    <img src="/img/banner.jpg" alt="Banner">
    @if($nome == "Rafael")
        <p>A condição é true</p>
    @else
        <p>A condição é false</p>
    @endif 


    @if($nome == "Rafael")
        <p>O nome é Rafael!</p>
        <p>E a sua idade é {{ $idade}}</p>
    @else
        <p>O nome é {{ $nome }}!</p>
        <p>E a sua idade é {{ $idade }}</p>
    @endif


    @for($i = 0; $i < count($arr); $i++)
        
        <p>{{ $arr[$i] }} - {{$i}}</p>
        @if($i == 2)
            <p>O i é par!</p>
        @endif

    @endfor

    @foreach($arrNomes as $nome)
        <a>{{ $loop->index }}</a>
        <p>{{ $nome }},,</p>
    @endforeach

    {{-- Espaço para códiog PHP puro--}}
    @php
        $name = "Rafael Vargas";
        echo "<p>$name</p>"
    @endphp
@endsection