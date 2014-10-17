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

Route::match(array('GET', 'POST'), '/incoming', function()
{
 $twiml = new Services_Twilio_Twiml();
 $twiml->say('Hello - You app answered your phone douchbag!');
 $response = Response::make($twiml, 200);
 $response->header('Content-Type', 'text/xml');
  return $response;
});

Route::get('/', function()
{
	return View::make('hello');
});
