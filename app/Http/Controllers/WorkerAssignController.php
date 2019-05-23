<?php

namespace App\Http\Controllers;

use App\employee;
use App\WorkerAssign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class WorkerAssignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $work_sections = DB::table('work_sections')->get();
        $work_types =DB::table('work_types')->get();


        $worker_assigns = DB::table('worker_assigns')
            ->join('work_types', 'worker_assigns.work_type_id','=','work_types.id')
            ->select('worker_assigns.*','work_types.work_type')
            ->paginate('5');

        return view('admin.worker_assign.worker_assign_index',[
            'work_sections' =>  $work_sections,
            'work_types' => $work_types,
            'worker_assigns' => $worker_assigns

        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $term = Input::get('term');

        $results = array();

        $employees = DB::table('employees')
            ->where('employee_name', 'LIKE', '%'.$term.'%')
            ->orWhere('employee_id', 'LIKE', '%'.$term.'%')
            ->take(5)->get();

        foreach ($employees as $employee)
        {
            $results[] = [ 'id' => $employee->id, 'value' => $employee->employee_name.' '.$employee->employee_id ];
        }
        return Response::json($results);


    }

    public function create()
    {
        $worker_assigns = WorkerAssign::all();
        return view('admin.worker_assign.worker_assign_index',['worker_assigns'=>$worker_assigns]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request;
//        $worker_assign =new WorkerAssign();
//      dd($request->all()); exit();
        foreach($request->employee_name_id as $key=>$value){
            WorkerAssign::create([
                'work_section_id' => $request->work_section_id,
                'employee_name_id'  =>  $value,
                'work_type_id'  => $request->work_type_id[$key],
                'price' =>  $request->price[$key],
            ]);
        }
//        $worker_assign->work_section_id = $request->work_section_id;
//        $worker_assign->employee_name_id = $request->employee_name_id;
//        $worker_assign->work_type_id = $request->work_type_id;
//        $worker_assign->price = $request->price;
//        $worker_assign->save();
        return redirect('/worker/assign');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WorkerAssign  $workerAssign
     * @return \Illuminate\Http\Response
     */
    public function show(WorkerAssign $workerAssign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WorkerAssign  $workerAssign
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkerAssign $workerAssign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WorkerAssign  $workerAssign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkerAssign $workerAssign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WorkerAssign  $workerAssign
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkerAssign $workerAssign)
    {
        //
    }
}
