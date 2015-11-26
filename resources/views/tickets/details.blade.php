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
                    <span class="label label-success">{{$ticket->status}}</span>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <button class="btn btn-danger">Número de votos : 12</button>
                </div>
            </div>
            <br/>

            <div class="row">
                <div class="col-lg-2"> Usuario # 1 </div>
                <div class="col-lg-2"> Usuario # 2 </div>
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
                    Número de Comentarios (9)
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <hr/>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <strong>Nombre del Usuario</strong>
                </div>
                <div class="col-lg-8">
                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dolores dolorum
                        eos ex facere fuga ipsam, laudantium maxime nemo, nisi pariatur perferendis sapiente sit
                        suscipit. Laudantium magnam optio quibusdam.
                    </div>
                    <div>At aut distinctio ea magni minima officia quae saepe tempore. Aliquid at consequatur dolores,
                        eos facilis iure iusto labore laborum, maxime mollitia odit pariatur quas quidem quisquam
                        repellendus rerum sed?
                    </div>
                </div>
                <div class="col-lg-8">
                    <span class="glyphicon glyphicon-time"></span> 26/11/2015 14:55:42
                </div>
            </div>
            <br/>

            <div class="row">
                <div class="col-lg-8">
                    <strong>Nombre del Usuario</strong>
                </div>
                <div class="col-lg-8">
                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dolores dolorum
                        eos ex facere fuga ipsam, laudantium maxime nemo, nisi pariatur perferendis sapiente sit
                        suscipit. Laudantium magnam optio quibusdam.
                    </div>
                    <div>At aut distinctio ea magni minima officia quae saepe tempore. Aliquid at consequatur dolores,
                        eos facilis iure iusto labore laborum, maxime mollitia odit pariatur quas quidem quisquam
                        repellendus rerum sed?
                    </div>
                </div>
                <div class="col-lg-8">
                    <span class="glyphicon glyphicon-time"></span> 26/11/2015 14:55:42
                </div>
            </div>
            <br/>

            <div class="row">
                <div class="col-lg-8">
                    <strong>Nombre del Usuario</strong>
                </div>
                <div class="col-lg-8">
                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dolores dolorum
                        eos ex facere fuga ipsam, laudantium maxime nemo, nisi pariatur perferendis sapiente sit
                        suscipit. Laudantium magnam optio quibusdam.
                    </div>
                    <div>At aut distinctio ea magni minima officia quae saepe tempore. Aliquid at consequatur dolores,
                        eos facilis iure iusto labore laborum, maxime mollitia odit pariatur quas quidem quisquam
                        repellendus rerum sed?
                    </div>
                </div>
                <div class="col-lg-8">
                    <span class="glyphicon glyphicon-time"></span> 26/11/2015 14:55:42
                </div>
            </div>
            <br/>


        </div>
    </article>

@endsection