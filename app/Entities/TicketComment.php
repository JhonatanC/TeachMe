<?php

namespace TeachMe\Entities;

use Illuminate\Database\Eloquent\Model;

class TicketComment extends Model
{

    protected $table = 'ticket_comments';

    protected $fillable = [
        'comment',
        'link',
        'user_id',
        'ticket_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
