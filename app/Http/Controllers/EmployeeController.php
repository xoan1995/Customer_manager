<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Group;
use App\Http\Requests\EmployeeRequestValidate;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::all();
        $groups = Group::all();
        return view('employees.list', compact('employees', 'groups'));
    }

    public function create()
    {
        $groups = Group::all();
        return view('employees.create', compact('groups'));
    }

    public function store(EmployeeRequestValidate $request)
    {
        $employee = new Employee();
        $employee->fullName = $request->fullName;
        $employee->code = $request->code;
        $employee->dob = $request->dob;
        $employee->sex = $request->sex;
        $employee->phone = $request->phone;
        $employee->numberId = $request->numberId;
        $employee->address = $request->address;
        $employee->email= $request->email;
        $employee->group_id = $request->group_id;
        $employee->save();

        return redirect()->route('employees.index');
    }

    public function show(Employee $employee)
    {
        //
    }

    public function edit($id)
    {
        $groups=Group::all();
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee', 'groups'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->fullName = $request->fullName;
        $employee->code = $request->code;
        $employee->dob = $request->dob;
        $employee->sex = $request->sex;
        $employee->phone = $request->phone;
        $employee->numberId = $request->numberId;
        $employee->address = $request->address;
        $employee->email= $request->email;
        $employee->group_id = $request->group_id;
        $employee->save();

        return redirect()->route('employees.index');

    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return response()->json([
            'message'=>'Xóa thành công!'
        ]);
//        return redirect()->route('employees.index');
    }

    public function search(Request $request)
    {
        if($request->ajax()){
            $employees= Employee::where('fullName', 'LIKE', '%'.$request->keyword.'%')->get();
            return response()->json($employees);
        }
//        $keyword = $request->input('keyword');
//        if (!$keyword) {
//            return redirect()->route('employees.index');
//        }
//        $employees = Employee::Where('fullName', 'LIKE', '%' . $keyword . '%')->simplePaginate(15);
//        return view('employees.list', compact('employees','keyword'));
    }
}
