
@extends('layout.app')


@section('title','Songs')

@section('body')
    {{'Your Music Box'}}
    @foreach($songs as $song)
    {{$song->title}}
    @endforeach

    @endsection