<?php

/** @var \Laravel\Lumen\Routing\Router $router */
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    $profile = DB::table("profile")->find(1);
    //$album = DB::table('album')->get();

    //return $profile->name;


    return view('example', ['name' => 'James']);
    exit();
});
