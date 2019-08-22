<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/wfm/portal/auth', 'WorkforceManagementSystem@auth')->name('auth');
Route::post('/wfm/hr/resource', 'WorkforceManagementSystem@new_employee')->name('new_employee');
Route::post('/wfm/employee/search', 'WorkforceManagementSystem@employee')->name('employee');

