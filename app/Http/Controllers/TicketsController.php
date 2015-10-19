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

        $ticket = Ticket::orderBy('created_at','DESC')->get();
        return view('tickets.list',compact('ticket'));
    }

    public function popular()
    {
        return view('tickets.details');
    }

    public function open()
    {
        //
    }

    public function closed()
    {
        //
    }

    public function details($id)
    {
        $ticket = Ticket::findOrFail($id);
        return view('tickets.details',compact('ticket'));
    }
}
