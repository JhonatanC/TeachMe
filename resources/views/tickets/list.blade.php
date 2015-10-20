@extends('layout')

@section('content')
    <h1>Vista lista principal</h1>

    <form>
        <div class="row">
            <div class="small-12 large-3 columns">
                <label>Input Label
                    <input type="text" placeholder="large-4.columns" />
                </label>
            </div>
            <div class="small-12 large-4 columns">
                <label>Select Box
                    <select>
                        <option value="husker">Husker</option>
                        <option value="starbuck">Starbuck</option>
                        <option value="hotdog">Hot Dog</option>
                        <option value="apollo">Apollo</option>
                    </select>
                </label>
            </div>
            <div class="small-6 large-2 columns">
                <input class="button" type="submit" value="filtrar"/>
            </div>
            <div class="small-6 large-2 columns">
                <input class="button alert" type="submit" value="Eliminar Filtro"/>
            </div>
        </div>
    </form>

    {{--@foreach($ticket as $ticket)
        <ul>
            <li><a href="{{ route('tickets.details',$ticket) }}">{{ $ticket->title }}</a></li>
            <li><a href="#">{{ $ticket->status }}</a></li>
            <li><a href="#">{{ $ticket->created_at }}</a></li>
        </ul>
    @endforeach--}}
@endsection