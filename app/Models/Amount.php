<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amount extends Model
{
    use HasFactory;
    protected $guarded = [];
    public static $validationRules = [
        'price'   => 'required',
        'status'   => ['sometimes','in:0,1,2'],
        'bid_id'   => ['required','integer']
    ];
}
