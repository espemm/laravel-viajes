<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function byId()
    {
        $employees = Employee::orderBy('emp_id')->get();

        return view('employees.index', [
            'employees' => $employees,
            'title' => 'Empleados ordenados por ID'
        ]);
    }

    public function byLastName()
    {
        $employees = Employee::orderBy('emp_lastname')
            ->orderBy('emp_firstname')
            ->get();

        return view('employees.index', [
            'employees' => $employees,
            'title' => 'Empleados ordenados por apellidos'
        ]);
    }

    public function lastNameStartsWith()
    {
        $employees = Employee::where('emp_lastname', 'like', 'A%')
            ->orderBy('emp_lastname')
            ->orderBy('emp_firstname')
            ->get();

        return view('employees.index', [
            'employees' => $employees,
            'title' => 'Apellidos que empiezan por A'
        ]);
    }

    public function bornIn()
    {
        $employees = Employee::whereYear('emp_birth_date', 1990)
            ->orderBy('emp_lastname')
            ->orderBy('emp_firstname')
            ->get();

        return view('employees.index', [
            'employees' => $employees,
            'title' => 'Nacidos en 1990'
        ]);
    }
}
