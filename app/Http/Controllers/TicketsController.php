<?php

namespace TeachMe\Http\Controllers;

use Illuminate\Http\Request;
use TeachMe\Http\Requests;
use TeachMe\Http\Controllers\Controller;
use TeachMe\Entities\Ticket;

class TicketsController extends Controller
{
    public function latest()
    {
        $tickets = Ticket::orderBy('created_at', 'DES')->get();
        return view('tickets.list',compact('tickets'));
    }

    public function popular()
    {
        return view('tickets.list');
        //return view('tickets.popular');
    }

    public function open()
    {
        return view('tickets.list');
        //return view('tickets.open');
    }

    public function closed()
    {
        return view('tickets.list');
        //return view('tickets.closed');
    }

    public function details($id)
    {
        $ticket = Ticket::findOrFail($id);
        return view('tickets.details',compact('ticket'));
    }
}
