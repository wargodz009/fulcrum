<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['bids'];
    public static $validationRules = [
        'name'   => 'required',
        'email'   => ['required','email'],
        'password'   => 'required'
    ];
    public function bids() {
        return $this->hasMany(Bid::class);
    }
}
