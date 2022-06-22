@extends('layouts.app')
@section('content')
{{-- @include('alerts') --}}



<table class="table team">
        <thead>
            {{-- <th>Logo</th> --}}
            <th>Posizione</th>
            <th>Punti</th>
            <th>Vittorie</th>
            <th>Pareggi</th>
            <th>Sconfitte</th>
            <th>Modifica</th>
        </thead>
    
        <tbody>
            @foreach ($teams as $team)
            <tr>
                {{-- <td><img src="{{asset('images').$team->logo}}" alt="Logo . {{ $team->position }}"></td> --}}
                <td>{{$team->position}}</td>
                <td>{{$team->point}}</td>
                <td>{{$team->win}}</td>
                <td>{{$team->draw}}</td>
                <td>{{$team->lose}}</td>
                <td> <a class="btn btn-primary" href="{{ route('tableA.edit', $team->id) }}">Modifica</a> </td>
            </tr>
            @endforeach
        </tbody>
</table>

@endsection