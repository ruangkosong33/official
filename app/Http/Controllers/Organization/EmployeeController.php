<?php

namespace App\Http\Controllers\Organization;

use App\Models\Division;
use App\Models\Employee;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee=Employee::all();

        return view('admin.pages.employee.index-employee', ['employee'=>$employee]);
    }

    public function create()
    {
        $employee=Employee::all();
        $division=Division::all();

        return view('admin.pages.employee.create-employee', ['division'=>$division, 'employee'=>$employee]);
    }

    public function store(Request $request)
    {
        $employee=$request->validate([
            'name_employee'=>'required',
            'nip'=>'required',
            'division_id'=>'required',
            'image_employee'=>'required|mimes:jpg,png,jpeg|max:2000',
            'position'=>'required',
            'status'=>'required',
            'religion'=>'required',
            'education_school'=>'required',
            'education_work'=>'required',
        ]);

        if($request->file('image_employee'))
        {
            $file = $request->file('image_employee');
            $extention = $file->getClientOriginalExtension();
            $employees = time().'.'.$extention;
            $file->move('uploads/image-pegawai/', $employees);
        }

        $employee=Employee::create([
            'name_employee'=>$request->name_employee,
            'nip'=>$request->nip,
            'division_id'=>$request->division_id,
            'image_employee'=>$employees,
            'position'=>$request->position,
            'status'=>$request->status,
            'religion'=>$request->religion,
            'education_school'=>$request->education_school,
            'education_work'=>$request->education_work,

        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('employee.index');
    }

    public function show()
    {
        $employee=Employee::all();

        return view('admin.pages.employee.show-employee', ['employee'=>$employee]);
    }

    public function edit($id)
    {
        $employee=Employee::findOrFail($id);
        $division=Division::all();

        return view('admin.pages.employee.edit-employee', ['employee'=>$employee, 'division'=>$division]);
    }

    public function update(Request $request, $id)
    {
        $employee=$request->validate([
            'name_employee'=>'required',
            'nip'=>'required',
            'image_employee'=>'required|mimes:jpg,png,jpeg|max:2000',
            'position'=>'required',
            'status'=>'required',
            'religion'=>'required',
            'education_school'=>'required',
            'education_work'=>'required',
        ]);

        $employee=Employee::findOrFail($id);

        if($request->file('image_employee'))
        {
            $file = $request->file('image_employee');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/image-pegawai/', $employees);

        }else{

            unset($employee['image_employee']);
        }

        $employee->update([
            'name_employee'=>$request->name_employee,
            'nip'=>$request->nip,
            'image_employee'=>$employees,
            'position'=>$request->position,
            'status'=>$request->status,
            'religion'=>$request->religion,
            'education_school'=>$request->education_school,
            'education_work'=>$request->education_work,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('employee.index');
    }

    public function destroy($id)
    {
        $employee=Employee::findOrFail($id);

        $employee->delete();

        return redirect()->route('employee.index');
    }
}
