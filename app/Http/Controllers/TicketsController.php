<?php

namespace TeachMe\Http\Controllers;

use Illuminate\Http\Request;
use TeachMe\Entities\Ticket;
use TeachMe\Http\Requests;
use TeachMe\Http\Controllers\Controller;

class TicketsController extends Controller
{
    public function latest()
    {
        $tickets = Ticket::orderBy('created_at','DESC')->paginate(8);
        return view('tickets.list',compact('tickets'));
    }

    public function popular()
    {
        //
    }

    public function open()
    {
        $tickets = Ticket::orderBy('created_at','DESC')
            ->where('status','open')
            ->paginate(4);
        return view('tickets.open',compact('tickets'));
    }

    public function closed()
    {
        $tickets = Ticket::orderBy('created_at','DESC')
            ->where('status','closed')
            ->paginate(4);
        return view('tickets.closed',compact('tickets'));
    }

    public function details($id)
    {
        $ticket = Ticket::findOrFail($id);
        return view('tickets.details',compact('ticket'));
    }
}
