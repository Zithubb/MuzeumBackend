@extends('layout')


@section('content')

        <a href="{{ route('statues.index') }}">Go to statue listing</a>
    <h1>Edit statue</h1>
    <form method='POST' action="{{ route('statues.update', $statue->id) }}">
        @method('PATCH')
        @csrf
        <div>
            Person:<br>
            <input type="text" name="person" value="{{ $statue->person }}">
        </div>
        <div>
            Height:<br>
            <input type="number" name="height" value="{{ $statue->height }}">
        </div>
        <div>
            Price:<br>
            <input type="number" name="price" value="{{ $statue->price }}">
        </div>
        <div>
            <input type="submit" value="Edit">
        </div>
    </form>
        <a href="{{ route('statues.show', $statue->id) }}">Back</a>
@endsection