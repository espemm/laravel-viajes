<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;
use App\Http\Controllers\EmployeeController;

Route::get(
    '/employees/by-id',
    [EmployeeController::class, 'byId']
)->name('employees.byId');

Route::get(
    '/employees/by-lastname',
    [EmployeeController::class, 'byLastName']
)->name('employees.byLastName');

Route::get(
    '/employees/filter-letter',
    [EmployeeController::class, 'lastNameStartsWith']
)->name('employees.starts');

Route::get(
    '/employees/filter-year',
    [EmployeeController::class, 'bornIn']
)->name('employees.born');



Route::get('/crear-empleado', function () {
    Employee::create([
        'emp_id' => 1,
        'emp_firstname' => 'Espe',
        'emp_lastname' => 'Micó',
        'emp_birth_date' => '1990-05-10',
        'emp_hire_date' => '2025-01-15',
        'salary' => 2100.50,
    ]);

    return 'Empleado creado correctamente';
});

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'home')->name('home');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');