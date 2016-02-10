@extends('layout')

@section('content')

    <article class="row">
        <div class="col-lg-12">

            <div class="row">
                <div class="col-lg-6">
                    <h2>
                        {{$ticket->title}}
                    </h2>
                    <p>{{$ticket->created_at->format('d/m/Y h:ia')}}</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2">
                    @include('tickets.partials.status')
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <button class="btn btn-danger">Número de votos : {{ count($ticket->voters) }}</button>
                </div>
            </div>
            <br/>

            <div class="row">
                @foreach($ticket->voters as $user)
                    <div class="col-lg-2"> {{ $user->name }} </div>
                @endforeach
            </div>
            <br/>

            <div class="row">
                <div class="col-lg-8">
                    <button class="btn btn-primary">
                        <span class="glyphicon glyphicon-hand-right"></span> Votar
                    </button>
                </div>
            </div>
            <br/>
            
            <div class="row">
                <div class="col-lg-8">Nuevo Comentario</div>
                <div class="col-lg-8">
                    <label for="" class="">Comentarios</label>
                    <textarea class="form-control" rows="8"></textarea>
                </div>
            </div>
            <br/>

            <div class="row">
                <div class="col-lg-8">
                    <label for="" class="">Enlaces</label>
                    <input class="form-control" type="text"/>
                </div>
            </div>
            <br/>

            <div class="row">
                <div class="col-lg-12">
                    <input class="btn btn-primary" type="submit" value="Enviar Comentario"/>
                </div>
            </div>
            <br/>

            <div class="row">
                <div class="col-lg-4">
                    Número de Comentarios {{ count($ticket->comments) }}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <hr/>
                </div>
            </div>

            @foreach($ticket->comments as $comment)
                <div class="row">
                    <div class="col-lg-8">
                        <strong>{{ $comment->user->name }}</strong>
                    </div>
                    <div class="col-lg-8">
                        <div> {{ $comment->comment }} </div>
                    </div>
                    <div class="col-lg-8">
                        <span class="glyphicon glyphicon-time"></span> {{ $comment->created_at->format('d/m/Y h:ia') }}
                    </div>
                </div>
                <br/>
            @endforeach

        </div>
    </article>

@endsection