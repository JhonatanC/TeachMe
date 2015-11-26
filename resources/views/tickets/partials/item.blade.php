<article class="row space-top-buttom">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-6">
                <h2>
                    {{$ticket->title}}
                </h2>
            </div>
            <div class="col-lg-4 col-lg-offset-2">
                <span class="label label-success">{{$ticket->status}}</span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <button class="btn btn-primary">
                    <span class="glyphicon glyphicon-hand-right"></span> Votar
                </button>
                <a href="{{ route('tickets.details',$ticket) }}">12 Votos</a> - <a href="#">Comentarios</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <span class="glyphicon glyphicon-time"></span> {{$ticket->created_at->format('d/m/Y h:ia')}}
            </div>
        </div>
    </div>
</article>