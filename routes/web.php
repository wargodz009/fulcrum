<?php

use App\Models\Property;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home', ['test' => 'working']);
});
Route::get('/property/{property}', function (Property $property) {
    return Inertia::render('Property', [
        'loc' => $property,
        'next' => '/property/'.(!empty($property->next()?->id)?$property->next()->id:Property::first()->id),
        'prev' => '/property/'.(!empty($property->prev()?->id)?$property->prev()->id:Property::first()->id),
    ]);
});
