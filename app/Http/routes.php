<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sayHello/{name?}', function($name='Lassen'){
	// return view('sayHello');
	if($name == 'Nico'){
		return redirect('/sayHello');
	}
	return "Hello $name";
});


Route::get('/uppercase/{word?}', function ($word="empty") {
	if(is_string($word)){
		$upperCase = strtoupper($word);
	    return "Upper case word is: $upperCase";
	}
	else{
		return "Value not a string";
	}
});

Route::get('/increment/{number?}', function ($number=0) {
	if(is_numeric($number))
	    return "number $number plus one is = ".++$number;
	else{
		return "Value entered not a number";
	}
});

Route::get('/add/{number1?}/{number2?}', function ($number=0, $number1=0) {
	if(is_numeric($number) && is_numeric($number1))
	    return "the sum is = ".($number+$number1);
	else{
		return "Value entered not a number";
	}
});

Route::get('/rolldice/{guess?}', function($guess=0){
	$data['randomNum'] = rand(1,6);
	$data ['guess'] = $guess;
	//more clear way	
	return view('codeup.roll-dice')->with($data);
});


