<?php

use Illuminate\Support\Facades\Route;

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

/*Build in Routes*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Backend Route*/
/*Custom Routes*/
Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
	Route::get('get_transportation', 'TransportationController@getTransportations')->name('get_transportation');
});
Route::group(['middleware' => ['role:admin']], function () {
	Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
		Route::get('/dashboard', 'AdminDashboardController@index')->name('dashboard');
		Route::resource('status', 'StatusController');
		Route::resource('type', 'TypeController');
		Route::get('get_type', 'TypeController@getTypes')->name('get_type');
		Route::resource('transportation', 'TransportationController');
		/*Si Thu*/
		Route::resource('tag',"TagController");
		Route::resource('feature','FeatureController');
		Route::get('get_type', 'TypeController@getTypes')->name('get_type');
		Route::get('get_tag', 'TagController@getTags')->name('get_tag');
		Route::get('get_feature', 'FeatureController@getFeatures')->name('get_feature');
		Route::resource('agent','AgentController');
		Route::get('get_agent', 'AgentController@getAgent')->name('get_agent');
	});
});

Route::group(['middleware' => ['role:agent']], function () {
	Route::group(['prefix'=>'agent','as'=>'agent.'], function(){
	Route::get('/dashboard', 'AdminDashboardController@agentDashboard')->name('dashboard');
	Route::resource('property', 'PropertyController');
	Route::get('get_map', 'PropertyController@getMap')->name('get_map');
	Route::get('get_neighborhood_by_id', 'PropertyController@getNeighborhoodById')->name('get_neighborhood_by_id');
	Route::get('get_school_by_id', 'PropertyController@getSchoolById')->name('get_school_by_id');
	Route::get('get_fact_by_id', 'PropertyController@getFactById')->name('get_fact_by_id');
	});
});

/*Frontend Route*/

Route::get('/', 'FrontendController@index')->name('main');
Route::get('/property', 'FrontendController@property')->name('property');
Route::get('/property/{id}','FrontendController@propertyDetail')->name('property_detail');
Route::get('/agent', 'FrontendController@agent')->name('agent');
Route::get('/blog', 'FrontendController@blog')->name('blog');

