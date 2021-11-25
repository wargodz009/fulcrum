<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * @group Bid management
 *
 * APIs for managing Bids
 */
class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Bid::paginate(1));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @bodyParam status integer The status of the property. Example: 0
     * @bodyParam property_id integer the id of the property. Example: 1
     * @bodyParam user_id integer the id of the user. Example: 1
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $res = Validator::make($request->all(),Bid::$validationRules);

        if ($res->errors()->count() > 0) {
            return response()->json($res->errors());
        }

        $bid = new Bid();
        return response()->json($bid->create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Bid $bid)
    {
        return response()->json($bid);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bid  $bid
     * @bodyParam status integer The status of the property. Example: 0
     * @bodyParam property_id integer the id of the property. Example: 1
     * @bodyParam user_id integer the id of the user. Example: 1
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Bid $bid)
    {
        $res = Validator::make($request->all(),Bid::$validationRules);

        if ($res->errors()->count() > 0) {
            return response()->json($res->errors());
        }
        $b = Bid::findOrFail($bid->id);
        $b->update($request->all());
        return response()->json($b);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Bid $bid)
    {
        return response()->json($bid->delete());
    }
}
