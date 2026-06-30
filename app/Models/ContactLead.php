<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactLead extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'service_interest',
        'message',
        'source',
        'status',
        'notes',
    ];
}
