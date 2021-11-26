<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['amount'];
    public static $STATUS_INACTIVE = 0;
    public static $STATUS_ACTIVE = 1;
    public static $STATUS_OUTBID = 2;
    public static $STATUS_WINNING = 3;

    public static $validationRules = [
        'property_id'   => 'required',
        'status'   => ['sometimes','in:0,1,2'],
        'user_id'   => ['required','integer']
    ];

    public function amount() {
        return $this->hasOne(Amount::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
