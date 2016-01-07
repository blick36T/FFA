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

use App\Device;
use Illuminate\Http\Request;

/**
 * Show Device Dashboard
 */
Route::get('/', function () {
    return view('devices', [
    	'devices' => Device::orderBy('created_at', 'asc')->get()
    ]);
});


/**
 * Add New Device
 */
Route::post('/device', function (Request $request) {
	$validator = Validator::make($request->all(), [
		'name' => 'required|max:255',
	]);

	if ($validator->fails()) {
		return redirect('/')
			->withInput()
			->withErrors($validator);
	}

	$device = new Device;
	$device->name = $request->name;
	$device->save();

	return redirect('/');
});


/**
 * Delete Device
 */
Route::delete('/device/{id}', function ($id) {
	Device::findOrFail($id)->delete();

	return redirect('/');
});
