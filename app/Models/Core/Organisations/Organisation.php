<?php

namespace App\Models\Core\Organisations;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    protected $table = 'organisations';

    protected $fillable = [
        'name'
    ];
}
