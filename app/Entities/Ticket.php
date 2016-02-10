<?php

namespace TeachMe\Entities;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    protected $table = 'tickets';

    protected $fillable = [
        'title',
        'status',
        'user_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function comments()
    {
        return $this->hasMany(TicketComment::class);
        // return $this->hasMany('Teachme\Entities\TicketComment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function voters()
    {
        return $this->belongsToMany(User::class,'ticket_votes');
    }

}
