<?php

namespace App\Http\Controllers;

use App\WorkSection;
use App\WorkStationType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $work_station_types = DB::table('work_station_types')
           ->get();


        $work_sections = DB::table('work_sections')
            ->join('work_station_types','work_sections.station_type_id','=','work_station_types.id')
            ->select('work_sections.*', 'work_station_types.station_type_name')
            ->paginate(10);

        return view('admin.work_section.work-sectionIndex ',['work_station_types'=>$work_station_types,
            'work_sections'=> $work_sections]);
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
        WorkSection::create($request->all());
        return redirect('work/section');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WorkSection  $workSection
     * @return \Illuminate\Http\Response
     */
    public function show()
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WorkSection  $workSection
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $work_station_types =WorkStationType::all();
        $work_sections = WorkSection::find($id);
        return view('admin.work_section.edit_workSection',
      ['work_sections'=>$work_sections,
    'work_station_types'=>$work_station_types]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WorkSection  $workSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkSection $workSection)
    {
      $work_section = WorkSection::find($request->id);
      $work_section->work_station=$request->work_station;
      $work_section->status=$request->status;
      $work_section->description=$request->description;
      $work_section->serial_num=$request->serial_num;
      $work_section->station_type_id=$request->station_type_id;
      $work_section->save();

      return redirect('work/section');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WorkSection  $workSection
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work_section = WorkSection::find($id);
        $work_section->delete();
        return redirect('work/section');
    }
}
