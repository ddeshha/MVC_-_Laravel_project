@extends('layouts.app')

@section("title", "Show Product")

@section("content")
    <h1>{{$product['title']}}</h1>
    <p>{{$product['descriton']}}</p>

    @if ($product['is_ready'])
        <p>Your order is ready</p>
        @else 
        <p>Your order isn't ready</p> 
    @endif
@stop