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

Auth::routes();


Route::get('setlocale/{locale}',function($lang){
    Session::put('locale',$lang);
    return redirect()->back();
});
Route::get('/','MatchController@index');
Route::group(['middleware'=>'language'],function ()
{
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/dashboard',array('uses'=>'DashboardController@index','as'=>'dashboard'));
    Route::get('/dashboard/{id}', array('uses' => 'DashboardController@edit', 'as' => 'dashboard_edit'));
    Route::put('/dashboard/{id}/modify', array('uses' => 'DashboardController@update', 'as' => 'dashboard_update'));

    Route::get('logout', array('uses'=>'Auth\LoginController@logout', 'as'=>'logout'));
    Route::get('/manageplayers',array('uses'=>'Manageplayers@index','as'=>'manageplayers'));

    Route::resource('/match','MatchController');
    Route::get('/match/{id}/destroy', array('uses' => 'MatchController@destroy', 'as' => 'delete_match'));

    Route::get('/stadium/create',array('uses'=>'TeamsController@createStadium','as'=>'createstadium'));
    Route::resource('/teams', 'TeamsController');
    Route::get('/teams/creater/{stadiumid}', array('uses'=>'TeamsController@create','as'=>'crearteam'));
    Route::post('/stadium/guardar',array('uses'=>'TeamsController@storeStadium','as'=>'storeStadium'));
    Route::get('/stadium/{id}',array('uses'=>'TeamsController@editStadium','as'=>'editStadium'));
    Route::put('/stadium/{id}',array('uses'=>'TeamsController@updateStadium','as'=>'updateStadium'));
    Route::get('/teams/stadium/{id}/destroy',array('uses'=>'TeamsController@deleteStadium','as'=>'deleteStadium'));
    Route::get('/teams/{id}/destroy', array('uses' => 'TeamsController@destroy', 'as' => 'delete_team'));

    Route::resource('/player_stats', 'PlayerStatsController');
    Route::get('/player_stats/{id}/create', array('uses' => 'PlayerStatsController@view_stats', 'as' => 'crear_stats'));
    Route::get('/player_stats/{id}/create_player', array('uses' => 'PlayerStatsController@crear', 'as' => 'crear_jugador_stats'));

    Route::resource('/players', 'PlayersController');
    Route::get('/players/{id}/destroy', array('uses' => 'PlayersController@destroy', 'as' => 'delete_player'));
    Route::get('/teams/player/{id}/destroy', array('uses' => 'PlayersController@destroy', 'as' => 'delete_player_on_team'));

    Route::resource('/competitions', 'CompetitionController');
    Route::get('/competition/{id}/destroy', 'CompetitionController@destroy');

    Route::resource('/users','UserController');
    Route::get('/users/{id}/destroy', 'UserController@destroy');


    Route::resource('/coach','CoachController');
    Route::get('/teams/coach/{id}/destroy', 'CoachController@destroy');
});
