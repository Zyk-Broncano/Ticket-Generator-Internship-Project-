<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';

    protected $fillable = [
        'transaction_id',
        'branch',
        'transaction_date',
        'created_by',
    ];

}
