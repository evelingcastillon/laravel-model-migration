@extends('layout.app')

@section('title', 'Home Page')

@section('content')
<h1>TRAVELS</h1>

@foreach($travels as $travel)
<div class="card">

    <img src="{{$travel->image}}" alt="">
    <h2>{{$travel->title}}</h2>
    <p>{{$travel->desc}}</p>
    <p>Vote: {{$travel->vote}}</p>
    <p>Price: {{$travel->vote}}</p>

</div>
@endforeach

@endsection