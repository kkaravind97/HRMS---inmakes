<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeSaveRequest;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class EmployeeController extends Controller
{
    public function list() {
        $employees = Employee::all();
        return view('admin.employees.employee_list', compact('employees'));
    }
    public function create() {
        return view ('admin.employees.create_employee');
    }
    public function save(EmployeeSaveRequest $request) {
        $input = $request->validated();
        Employee::create($input);
        return redirect()->route('admin.employee.list')->with('message', 'Employee added successfully !!');
    }

    public function delete($id) {
       $employee = Employee::find(decrypt($id));
       $employee->delete();
       return redirect('admin/employees')->with('message', 'Employee removed successfully !!');
    }
}
