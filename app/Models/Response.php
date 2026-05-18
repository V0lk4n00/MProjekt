<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $table = 'master_responses';

    protected $fillable = [
        'row_1',
        'row_2',
        'row_3',
        'row_4',
        'row_5',
        'session_token',
    ];
}
