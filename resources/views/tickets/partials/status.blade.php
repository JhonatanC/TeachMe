@if($ticket->status == 'open')
    <span class="label label-success">{{ trans('ticket.status.'.$ticket->status)}}</span>
@elseif($ticket->status == 'closed')
    <span class="label label-danger">{{ trans('ticket.status.'.$ticket->status)}}</span>
@endif
