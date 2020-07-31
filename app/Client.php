<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'last_name', 'cell_phone', 'email', 'company_id'
    ];
}
