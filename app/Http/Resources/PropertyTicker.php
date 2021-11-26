<?php

namespace App\Http\Resources;

use App\Models\Amount;
use App\Models\Bid;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class PropertyTicker extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $property_id = $this->id;
        $user = User::first();
        $active_bid = $user->bids()?->where('status',Bid::$STATUS_ACTIVE);
        $outbid_bid = $user->bids()?->where('status',Bid::$STATUS_OUTBID)?->count();
        $winning_bid = $user->bids()?->where('status',Bid::$STATUS_WINNING)?->count();

        $property_winning = Amount::whereIn('bid_id',
            Bid::select('id')
            ->where('property_id',$property_id)
            ->get()
            ->pluck('id')
            ->toArray())
        ->max('price');

        $property_outbid = Amount::whereIn('bid_id',
            Bid::select('id')
            ->where('property_id',$property_id)
            ->where('user_id',$user->id)
            ->get()
            ->pluck('id')
            ->toArray())
        ->max('price');

        return [
            'MyBid' => [
                'Outbid'    => $active_bid->count(),
                'Active'    => $outbid_bid,
                'ActivePrice'    => $active_bid->first()->amount->price,
                'Winning'    => $winning_bid,
            ],
            'MyBidVsProperty' => [
                'Winning'    => to_money($property_winning),
                'Outbid'    => '-'.to_money(($property_winning - $property_outbid)),
                'Active'    => Bid::select('id')->where('property_id',$property_id)->where('status',Bid::$STATUS_ACTIVE)->count(),
                'Current'    => to_money(Bid::select('id')->where('property_id',$property_id)->where('status',Bid::$STATUS_ACTIVE)->first()->amount->price),
            ],
            'PropertyBid' => [
                'Outbid'    => to_money($property_outbid),
                'Active'    => to_money($active_bid->first()->amount->price),
                'Winning'    => to_money($property_winning),
            ],
        ];
    }
}
