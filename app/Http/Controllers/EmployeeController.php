<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee=Employee::all();
        $division=Division::all();

        return view('admin.pages.employee.index-employee', ['employee'=>$employee, 'division'=>$division]);
    }

    public function create()
    {
        return view('admin.pages.employee.create-employee');
    }

    public function store(Request $request)
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

        if($request->file('image_employee'))
        {
            $files=$request->file('image_employee');
            $imageextension=$files->getClientOriginalName();
            $request->file('image_employee')->move(public_path('image-employee'), $imageemployee);
        }

        $employee=Employee::create([
            'name_employee'=>$request->name_employee,
            'nip'=>$request->nip,
            'division_id'=>$request->division_id,
            'image_employee'=>$image_employee,
            'position'=>$request->position,
            'status'=>$request->status,
            'religion'=>$request->religion,
            'education_school'=>$request->education_school,
            'education_work'=>$request->education_work,

        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('employee.index');
    }

    public function edit($id)
    {
        $employee=Employee::findOrFail($id);
        $division=Division::all();

        return view('admin.pages.employee.employee.edit', ['employee'=>$employee, 'division'=>$division]);
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
            $files=$request->file('image_employee');
            $imageextension=$files->getClientOriginalName();
            $request->file('image_employee')->move(public_path('image-employee'), $imageemployee);
            
        }else{

            unset($employee['image_employee']);
        }

        $employee->update([
            'name_employee'=>$request->name_employee,
            'nip'=>$request->nip,
            'image_employee'=>$image_employee,
            'position'=>$request->position,
            'status'=>$request->status,
            'religion'=>$request->religion,
            'education_school'=>$request->education_school,
            'education_work'=>$request->education_work,
        ]);

        return redirect()->route('employee.index');
    }

    public function destroy($id)
    {
        $employee=Employee::findOrFail($id);

        $employee->delete();

        return redirect()->route('employee.index');
    }
}
