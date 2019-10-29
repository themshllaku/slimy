<?php

namespace App\Models\Core\More;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table = 'currencies';

    protected $fillable = ['organisation_id', 'name', 'code', 'rate', 'enabled'];
}
