<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;
    protected $guarded = [];
    public static $validationRules = [
        'property_id'   => 'required',
        'status'   => ['sometimes','in:0,1,2']
    ];
}
