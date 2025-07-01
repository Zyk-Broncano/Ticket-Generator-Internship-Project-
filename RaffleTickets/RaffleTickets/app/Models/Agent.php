<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{

    protected $table = 'agents';
    protected $primaryKey = 'id';

    protected $fillable = [
        'agent_id',
        'agent_name',
        'agency_name',
        'agent_level',
        'branch',
        'ticket',
        'ticket_numbers',

    ];

    protected $casts = [
        'ticket_numbers'=> 'array'
    ];
}
