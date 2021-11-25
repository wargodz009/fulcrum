<?php

namespace App\Http\Controllers;

use App\Models\Amount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AmountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Amount::paginate(1));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $res = Validator::make($request->all(),Amount::$validationRules);

        if ($res->errors()->count() > 0) {
            return response()->json($res->errors());
        }

        $user = new Amount();
        return response()->json($user->create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Amount  $amount
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Amount $amount)
    {
        return response()->json($amount);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Amount  $amount
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Amount $amount)
    {
        $res = Validator::make($request->all(),Amount::$validationRules);

        if ($res->errors()->count() > 0) {
            return response()->json($res->errors());
        }
        $amt = Amount::findOrFail($amount->id);
        $amt->update($request->all());
        return response()->json($amt);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Amount  $amount
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Amount $amount)
    {
        return response()->json($amount->delete());
    }
}
