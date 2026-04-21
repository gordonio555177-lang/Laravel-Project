<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    public function employeeindex()
    {
        $employees = Employee::all(); 

        return view('employees.employee', ['items' => $employees]);
    }

    public function employeestore(Request $request)
    {
        Employee::create([
            'first_name' => $request->f_name,
            'last_name' => $request->l_name,
            'job_title' => $request->job_title,
            'salary' => $request->salary
        ]);

        return redirect('/employees');
    }
}
