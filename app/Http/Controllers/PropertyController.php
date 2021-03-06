<?php

namespace App\Http\Controllers;

use App\Http\Resources\PropertyTicker;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * @group Property management
 *
 * APIs for managing Properties
 */
class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Property::with('bids')->paginate(1));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @bodyParam address string required The address of the property. Example: sample street
     * @bodyParam win_bid integer the id of the winning bid. Example: 1
     * @bodyParam last_bid_diff integer the diff between last bid. Example: 1
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $res = Validator::make($request->all(),Property::$validationRules);

        if ($res->errors()->count() > 0) {
            return response()->json($res->errors());
        }

        $property = new Property();
        return response()->json($property->create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Property $property)
    {
        return response()->json(PropertyTicker::make($property));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Property $property)
    {
        $res = Validator::make($request->all(),Property::$validationRules);

        if ($res->errors()->count() > 0) {
            return response()->json($res->errors());
        }
        $pro = Property::findOrFail($property->id);
        $pro->update($request->all());
        return response()->json($pro);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Property $property)
    {
        return response()->json($property->delete());
    }
}
