<?php

namespace App\Http\Resources;

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
        $active_bid = $user->bids()?->where('status',1)?->count();
        $outbid_bid = $user->bids()?->where('status',2)?->count();
        $winning_bid = $user->bids()?->where('status',3)?->count();



        return [
            'MyBid' => [
                'Outbid'    => $active_bid,
                'Active'    => $outbid_bid,
                'Winning'    => $winning_bid,
            ],
            'MyBidVsProperty' => [
                'Winning'    => 1000,
                'Outbid'    => 1000,
                'Active'    => 0,
                'Current'    => 0,
            ],
            'PropertyBid' => [
                'Outbid'    => 100000,
                'Active'    => 100000,
                'Winning'    => 100000,
            ],
        ];
    }
}
