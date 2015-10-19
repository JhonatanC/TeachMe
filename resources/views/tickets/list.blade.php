@extends('layout')

@section('content')
    <h1>Vista lista principal</h1>
    @foreach($ticket as $ticket)
        <ul>
            <li><a href="{{ route('tickets.details',$ticket) }}">{{ $ticket->title }}</a></li>
            <li><a href="#">{{ $ticket->status }}</a></li>
            <li><a href="#">{{ $ticket->created_at }}</a></li>
        </ul>
    @endforeach
@endsection