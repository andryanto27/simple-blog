<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model{

    protected $table = 'contacts';
    protected $fillable = [
        'user_type',
        'user_id',
        'event',
        'auditable_id',
        'auditable_type',
        'old_values',
        'new_values',
        'url',
        'ip_address',
        'user_agent',
        'tags',
        'created_at',
        'updated_at'
    ];

}