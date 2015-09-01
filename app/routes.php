<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/','HomeController@showWelcome');
//navbar routes
Route::get('/contact', 'HomeController@showContact');
Route::get('/resume', 'HomeController@showResume');
Route::get('/mole', 'HomeController@showWhackamole');
Route::get('/simon', 'HomeController@showSimon');
Route::get('/weather', 'HomeController@showWeather');
Route::get('/adlisterpics', 'HomeController@showAdlisterpics');

//posts routes
Route::resource('posts', 'PostsController');

//login routes
Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@doLogout');
//Workout
Route::resource('workout', 'WorkoutController');
Route::get('/profile', 'WorkoutController@profile');

Route::get('/loginWO', 'WorkoutController@showLogin');
Route::post('/loginWO', 'WorkoutController@doLogin');
Route::get('/logoutWO', 'WorkoutController@doLogout');

//exercises
Route::get('orm-test', function ()
{
    $post1 = new Post();
    $post1->title = 'Eloquent is awesome';
    $post1->body = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi reprehenderit rerum beatae omnis eius sit totam, illo fugit magni, earum sapiente iste suscipit nam. Alias modi, minus deserunt commodi cumque.';
    $post1->save();

    $post2 = new Post();
    $post2->title = 'Eloquent is awesome';
    $post2->body = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus labore, reprehenderit quod debitis eveniet corporis obcaecati magnam dolorem, atque quia voluptates nemo, voluptatum odio et saepe magni, sit blanditiis ipsa.';
    $post2->save();
});

Route::get('/sayhello/{name?}', function($name = null)
{
    return View::make('my-first-view')->with(compact('name'));
});

Route::get('/sayhello/{name}', function($name)
{
    if ($name == "Chris") {
        return Redirect::to('/');
    } else {
        return "Hello, $name!";
    }
});

Route::get('/rolldice/{number}', function($number)
{
    $dice = mt_rand(1,6);
    return View::make('rolldice')->with(compact('number','dice'));
});