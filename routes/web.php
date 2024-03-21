<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing; //import the listing model

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{id}', function ($id) {
    return response('Post '. $id);
})->where('id', '[0-9]+');  // Regular expression to match only numbers for the id

Route::get('/search', function (Request $request) {

});

//All listings
Route::get('/listings', function(){
    return view('listings',
        [
            'heading' => 'Job Listings',
            'listings' => Listing::all() //use the Listing model to get all the listings
        ]
    );
});

//Single listing
Route::get('/listings/{id}', function($id){
    return view('listing',
    [
        'listing' => Listing::find($id) //use the Listing model to get a single listing
    ]);
});