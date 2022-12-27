<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;
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

Route::get('/', function () {
    return view('homepage', ['heading' => 'Employee List', 'employees' => Employee::all()]);
});

Route::get('/employee/{empl}', function (Employee $empl) {
    return view('employee', ['heading' => 'Employee Details', 'employee' => $empl]);
});

Route::get('/laravel', function() {
    return view('welcome');
});

Route::get('/add', function(){
    return view('add', ['heading' => 'Register Employee']);
});