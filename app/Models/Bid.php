<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['amount'];
    public static $validationRules = [
        'property_id'   => 'required',
        'status'   => ['sometimes','in:0,1,2'],
        'user_id'   => ['required','integer']
    ];
    public function amount() {
        return $this->hasOne(Amount::class);
    }

    public function user() {
        return $this->hasOne(User::class);
    }
}
