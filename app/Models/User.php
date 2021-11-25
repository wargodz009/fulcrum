<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $guarded = [];
    public static $validationRules = [
        'name'   => 'required',
        'email'   => ['required','email'],
        'password'   => 'required'
    ];
}
