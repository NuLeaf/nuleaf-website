<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
| Note (TP): New middleware must be registered in the Kernel.
*/

/**
 * Guest Access
 */  
Route::group(['middleware' => 'web'], function()
{
  Route::get('/'            , 'MainController@index');
  Route::get('/about'       , 'MainController@about');
  Route::get('/faq'         , 'MainController@faq');
  Route::get('/teams'       , 'MainController@teams');
  Route::get('/members'     , 'MainController@members');
  Route::get('/past-members', 'MainController@past_members');
  
  /**
   * Authentication
   */

  // Authentication Routes
  Route::get ('/cp/login' , 'Auth\AuthController@showLoginForm');
  Route::post('/cp/login' , 'Auth\AuthController@login');
  Route::get ('/cp/logout', 'Auth\AuthController@logout');

  // Password Reset Routes
  Route::get ('/cp/password/reset/{token?}', 'Auth\PasswordController@showResetForm');
  Route::post('/cp/password/email'         , 'Auth\PasswordController@sendResetLinkEmail');
  Route::post('/cp/password/reset'         , 'Auth\PasswordController@reset');

  /**
   * Member access
   */
  Route::group(['middleware' => 'auth'], function()
  {
    Route::get('/cp/index', 'MembersController@index');
    Route::get('/test'    , 'MainController@test');
    
    /**
     * Editor access
     */
    Route::group(['middleware' => 'role:or,editor,admin'], function()
    {
      // Resource: Events
      Route::get   ('/cp/events'             , 'EventsController@index');
      Route::post  ('/cp/events'             , 'EventsController@store');
      Route::patch ('/cp/events/{event}'     , 'EventsController@update');
      Route::delete('/cp/events/{event}'     , 'EventsController@destroy');

      // Resource: Steminars
      Route::get   ('/cp/steminars'                , 'SteminarsController@index');
      Route::post  ('/cp/steminars'                , 'SteminarsController@store');
      Route::get   ('/cp/steminars/all'            , 'SteminarsController@showAll');
      Route::get   ('/cp/steminars/create'         , 'SteminarsController@create');
      Route::get   ('/cp/steminars/{steminar}'     , 'SteminarsController@show');
      Route::patch ('/cp/steminars/{steminar}'     , 'SteminarsController@update');
      Route::delete('/cp/steminars/{steminar}'     , 'SteminarsController@destroy');
      Route::get   ('/cp/steminars/{steminar}/edit', 'SteminarsController@edit');

      /**
       * Admin access
       */
      Route::group(['middleware' => 'role:admin'], function()
      {

        // Resource: Users
        Route::get   ('/cp/users'            , 'UsersController@index');
        Route::post  ('/cp/users'            , 'UsersController@store');
        Route::patch ('/cp/users/{user}'     , 'UsersController@update');
        Route::delete('/cp/users/{user}'     , 'UsersController@destroy');

        // Resource: Teams
        Route::post  ('/cp/teams'       , 'TeamsController@store');
        Route::patch ('/cp/teams/{team}', 'TeamsController@update');
        Route::delete('/cp/teams/{team}', 'TeamsController@destroy');
      });
    });
  });
});
