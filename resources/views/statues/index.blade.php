@extends('layout')


@section('content')

    <p><a href="{{ route('home') }}">Vissza a főoldalra</a></p>

    <table>
        <tr>
            <th>Person</th>
            <th>Height</th>
            <th>Price</th>
        </tr>
    @foreach ($statues as $statue)
        <tr>
            <td>
                <a href="{{ route('statues.show', $statue->id) }}">{{ $statue->person }}</a>
            </td>
            <td>{{ $statue->height }}</td>
            <td>{{ $statue->price }}</td>
            <td>
                @include('delete-statue-button', ['statue'=>$statue])
            </td>
        </tr>
    @endforeach
    </table>
        <a href="{{ route('statues.create') }}">Create</a>
@endsection