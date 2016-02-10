<?php

namespace TeachMe\Entities;

use Illuminate\Database\Eloquent\Model;

class TicketVote extends Model
{
    
    protected $table = 'ticket_votes';

    protected $fillable = [
        'user_id',
        'ticket_id'
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
