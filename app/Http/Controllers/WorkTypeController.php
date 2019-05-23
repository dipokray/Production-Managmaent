<?php

namespace App\Http\Controllers;

use App\WorkSection;
use App\WorkType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $work_sections = DB::table('work_sections')
            ->get();

        $work_types = DB::table('work_types')
            ->join('work_sections', 'work_types.work_section_id','=','work_sections.id')
            ->select('work_types.*','work_sections.work_station')
            ->paginate('5');


        return view('admin.work_type.work_type_index',['work_sections'=>$work_sections,
            'work_types'=>$work_types ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $work_type = new WorkType();
        $work_type->work_type =$request->work_type;
        $work_type->status = $request->status;
        $work_type->price = $request->price;
        $work_type->work_section_id = $request->work_section_id;
        $work_type->save();
        return redirect('work/type');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WorkType  $workType
     * @return \Illuminate\Http\Response
     */
    public function show(WorkType $workType)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WorkType  $workType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $work_sections = WorkSection::all();
        $work_types = WorkType::find($id);

        return view('admin.work_type.edit_work_type',['work_sections'=>$work_sections,
            'work_types'=>$work_types]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WorkType  $workType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkType $workType)
    {
        $work_type = WorkType::find($request->id);
        $work_type->work_type =$request->work_type;
        $work_type->status = $request->status;
        $work_type->price = $request->price;
        $work_type->work_section_id = $request->work_section_id;
        $work_type->save();
        return redirect('work/type');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WorkType  $workType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work_type = WorkType::find($id);
        $work_type->delete();
        return redirect('work/type');

    }
}
