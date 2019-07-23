<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function averageSalary() {
        return collect(Employee::$employeeRepository)->average('salary');
    }
}
