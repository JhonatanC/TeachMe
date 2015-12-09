<?php

namespace TeachMe\Entities;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(TicketComment::class);
        // return $this->hasMany('Teachme\Entities\TicketComment');
    }

    public function voters()
    {
        return $this->belongsToMany(User::class,'ticket_votes');
    }

}
