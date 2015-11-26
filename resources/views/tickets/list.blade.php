@extends('layout')

@section('content')
    <article class="row">
        <div class="col-lg-12">
            <h1>Solicitar Película</h1> <button class="btn btn-primary">Nueva Solicitud</button>
        </div>
    </article>

    <article class="row">
        <div class="col-lg-12">
            <p>Hay 20 solicitudes populares</p>
        </div>
    </article>

    @foreach($tickets as $ticket)
        @include('tickets.partials.item',compact('ticket'))
    @endforeach

@endsection