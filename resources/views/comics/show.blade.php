@extends('layouts.main')

@dump($comic)

@section('content')
    <h1>Comics - Show</h1>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title}}">
    <p>
        {!!$comic->description!!}
    </p>
@endsection
