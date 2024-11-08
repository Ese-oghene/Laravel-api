<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('employ', [EmployeeController::class, 'getEmploy']);


// Get Specific employee details
Route::get('employ/{id}', [EmployeeController::class, 'getEmployBId']);

// add  employee 
Route::post('postEmployee', [EmployeeController::class, 'addEmployee']);

//update Employee
Route::put('updateEmployee/{id}', [EmployeeController::class, 'updateEmployee']);


//update Employee
Route::delete('deleteEmployee/{id}', [EmployeeController::class, 'deleteEmployee']);