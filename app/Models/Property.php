<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['bids'];
    public static $validationRules = [
        'address'   => 'required',
        'win_bid'   => 'required',
        'last_bid_diff'   => 'required',
    ];
    public function bids() {
        return $this->hasMany(Bid::class)->with('user');
    }
    public function getAddressAttribute($address) {
        return explode(PHP_EOL,$address);
    }
    public function next(){
        return $this->where('id', '>', $this->id)->orderBy('id','asc')->first();
    }
    public function prev(){
        return $this->where('id', '<', $this->id)->orderBy('id','desc')->first();
    }
    public function getWinBidAttribute($i) {
        return to_money($i);
    }
    public function getLastBidDiffAttribute($i) {
        return to_money($i);
    }
}
