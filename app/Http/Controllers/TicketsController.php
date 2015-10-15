<?php

namespace TeachMe\Http\Controllers;

use Illuminate\Http\Request;
use TeachMe\Http\Requests;
use TeachMe\Http\Controllers\Controller;

class TicketsController extends Controller
{
    public function latest()
    {
        //dd('latest');
        return view('tickets.list');
    }

    public function popular()
    {
        //dd('popular');
        return view('tickets.details');
    }

    public function open()
    {
        dd('open');
    }

    public function closed()
    {
        dd('closed');
    }

    public function detalis($id)
    {
        dd('detalis: '. $id);
    }
}
