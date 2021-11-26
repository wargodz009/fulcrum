<?php

namespace App\Http\Resources;

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
        return [
            'MyBid' => [
                'Outbid'    => 12,
                'Active'    => 12,
                'Winning'    => 12,
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
