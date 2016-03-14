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
  Route::get('/'       , 'PagesController@index');
  Route::get('/about'  , 'PagesController@about');
  Route::get('/faq'    , 'PagesController@faq');
  Route::get('/teams'  , 'PagesController@teams');
  Route::get('/members', 'PagesController@members');
  
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

    /**
     * Editor access
     */
    Route::group(['middleware' => 'editor'], function()
    {
      // Resource: Events
      Route::get   ('/cp/events'             , 'EventsController@index');
      Route::post  ('/cp/events'             , 'EventsController@store');
      Route::get   ('/cp/events/all'         , 'EventsController@showAll');
      Route::get   ('/cp/events/create'      , 'EventsController@create');
      Route::get   ('/cp/events/{event}'     , 'EventsController@show');
      Route::patch ('/cp/events/{event}'     , 'EventsController@update');
      Route::delete('/cp/events/{event}'     , 'EventsController@destroy');
      Route::get   ('/cp/events/{event}/edit', 'EventsController@edit');

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
      Route::group(['middleware' => 'admin'], function()
      {
        Route::get('/cp/admin', 'AdminController@index');

        // Resource: Users
        Route::post  ('/cp/admin/users'            , 'UsersController@store');
        Route::get   ('/cp/admin/users/search'     , 'UsersController@search');
        Route::get   ('/cp/admin/users/create'     , 'UsersController@create');
        Route::get   ('/cp/admin/users/{user}'     , 'UsersController@show');
        Route::patch ('/cp/admin/users/{user}'     , 'UsersController@update');
        Route::delete('/cp/admin/users/{user}'     , 'UsersController@destroy');
        Route::get   ('/cp/admin/users/{user}/edit', 'UsersController@edit');

        // Resource: Teams
        // Note (TP): Team forms should be within Admin index
        //            because they are so simple.
        Route::post  ('/cp/admin/teams'       , 'TeamsController@store');
        Route::patch ('/cp/admin/teams/{team}', 'TeamsController@update');
        Route::delete('/cp/admin/teams/{team}', 'TeamsController@destroy');
      });
    });
  });
});
