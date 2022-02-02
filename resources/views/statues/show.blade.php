@extends('layout')

@section('title', $statue->person)

@section('content')
        <a href="{{ route('statues.index') }}">Go to statue listing</a>
    <h1>The statue of {{ $statue->person }}</h1>
    <p>Height: {{ $statue->height }} cm</p>
    <p>Selling price: {{ $statue->price }} Ft</p>
    <p> @include('delete-statue-button', ['statue'=>$statue])</p>
        <a href="{{ route('statues.edit', $statue->id) }}">Edit</a>
@endsection