<?php

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
    return view('index');
});

Route::get('prd', function () {
    return view('property_details');
});

Route::get('pls', function () {
    return view('property_listing');
});

Route::get('favorite_properties', function () {
    return view('favorite_properties');
});

Route::get('contact', function () {
    return view('contact_us');
});

Route::post('propertyListingSearch', 'SearchController@search');

Route::post('loadPropertyDetails', 'SearchController@loadPropertyDetails');

Route::post('loadFeaturedPropertyDetails', 'SearchController@loadIndexPagePropertyDetails');

Route::post('loadFavoriteProperties', 'SearchController@loadFavoriteProperties');

Route::post('subscribeMail', 'SearchController@subscribeMail');

Route::post('contactUsSendMessage', 'SearchController@contactUsSendMessage');
