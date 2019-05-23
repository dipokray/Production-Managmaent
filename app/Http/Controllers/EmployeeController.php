<?php

namespace App\Http\Controllers;

use App\employee;
use App\section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    public function index()
    {
        $employees = DB::table('employees')
            ->join('sections','employees.section_id','=','sections.id')
            ->select('employees.*', 'sections.section_name')
            ->get();
//        $employees = DB::table('employees')->get();

        return view('admin.employee.index-employee', ['employees' => $employees]);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addEmployee()
    {
        $employees = DB::table('employees')
            ->join('sections','employees.section_id','=','sections.id')
            ->get();

        $sections = section::all();

        return view('admin.employee.add-employee',[
            'employees' => $employees ,
            'sections' => $sections
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {

        if($request->hasFile('Photo')){
            $image = $request->file('Photo');
            $newPhoto = time();
            $ext = $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            Image::make($image->getRealPath())->resize(80, 60)->save($destinationPath.'/'.$newPhoto.'.'.$ext);


        }
        $employee = new employee();
        $employee->employee_name = $request->employee_name;
        $employee->employee_id = $request->employee_id;
        $employee->designation = $request->designation;
        $employee->section_id = $request->section_id;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->mobile_no = $request->mobile_no;
        $employee->basic_pay = $request->basic_pay;
        $employee->house_rent = $request->house_rent;
        $employee->medical_allowance = $request->medical_allowance;
        $employee->Photo = $newPhoto.'.'.$ext;
        $employee->status = $request->status;
        $employee->save();


        return redirect('/employee/info');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

//        $employees = DB::table('employees')
//            ->join('sections','employees.section_id','=','sections.id')
//            ->get();

        $sections = section::all();
        $employees = employee::find($id);
        return view('admin.employee.edit-employee',[

            'employees' => $employees ,
            'sections' => $sections

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $employee = employee::find($request->id);
        if($request->hasFile('Photo')) {
            $image = $request->file('Photo');
            $newPhoto = time();
            $ext = $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            Image::make($image->getRealPath())->resize(80, 60)->save($destinationPath . '/' . $newPhoto . '.' . $ext);
            $employee->Photo = $newPhoto . '.' . $ext;
        }


            $employee->employee_name = $request->employee_name;
            $employee->employee_id = $request->employee_id;
            $employee->designation = $request->designation;
            $employee->section_id = $request->section_id;
            $employee->email = $request->email;
            $employee->address = $request->address;
            $employee->mobile_no = $request->mobile_no;
            $employee->basic_pay = $request->basic_pay;
            $employee->house_rent = $request->house_rent;
            $employee->medical_allowance = $request->medical_allowance;
            $employee->status = $request->status;
            $employee->save();




        return redirect('/employee/info');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = employee::find($id);
        $employee->delete();
         return redirect('/employee/info');
    }
}
