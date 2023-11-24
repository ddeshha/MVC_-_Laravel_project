@extends('layouts.app')

@section("title", "All Product")

@section("content")
    <h1>All Products</h1>
     @foreach ($products as $key => $value )
        <hr>
         {{$loop->iteration}} . {{$value["title"]}}
        <hr>
     @endforeach
@stop