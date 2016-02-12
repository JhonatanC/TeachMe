@extends('layout')

@section('content')
    <article class="row">
        <div class="col-lg-12">
            <h1>{{ $title = trans('ticket.' .Route::currentRouteName() . '_title') }}</h1> <button class="btn btn-primary">Nueva Solicitud</button>
        </div>
    </article>

    <article class="row">
        <div class="col-lg-12">
            <p>{{ Lang::choice('ticket.' .Route::currentRouteName() . '_total', $tickets->total() ) }}</p>
            <!-- <p>Hay {{-- $tickets->total() --}} {{-- $title --}}</p> -->
        </div>
    </article>

    <!--En envía el la variable ticket a través de compact, es para utilizarlo
    en el archivo tickets.partials.item dentro de partials-->
    @foreach($tickets as $ticket)
        @include('tickets.partials.item',compact('ticket'))
    @endforeach

    <div class="text-center">
        {!! $tickets->render() !!}
    </div>

@endsection