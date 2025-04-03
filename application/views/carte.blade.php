@extends('templates.main')
@push('css')
<link href="{{URL_CSS}}carte.css" rel="stylesheet">
@endpush
@section('content')

<div id="entete">
    <p>Nos plats</p>
</div>

@php
    $classe = 'bleu';
    $classe_a = 'bleu_a';
@endphp

@foreach($plats as $line)
    <div class="menu {{ $classe }}">
    <div class="content">
    <div class="description">
    {{$line["description"]}}
    </div>

    <div class="programmation">
    <a href=""><p class= "{{ $classe_a }}">AU MENU LE {{$line["day(date)"]}} {{$line["monthname(date)"]}}</p></a>
    </div>
    </div>

    <img src='{{URL_IMG}}{{$line["image"]}}' />
    </div>
    </br>
    @php
        if ($classe == 'beige') {
            $classe = 'bleu';
        } else {
            $classe = 'beige';
        }
        if ($classe_a == 'beige_a') {
            $classe_a = 'bleu_a';
        } else {
            $classe_a = 'beige_a';
        }
    @endphp
@endforeach
@endsection