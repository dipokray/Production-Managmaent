<?php

namespace App\Http\Controllers;

use App\WorkStationType;
use Illuminate\Http\Request;

class WorkStationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $work_station_types = WorkStationType::all();
        return view( 'admin.work_station_type.station_type',['work_station_types'=> $work_station_types]);
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
    public function store (Request $request)
    {
        $work_station_type = new WorkStationType();
         $work_station_type ->station_type_name = $request->station_type_name;
         $work_station_type->save();

          return redirect('work/station/type');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WorkStationType  $workStationType
     * @return \Illuminate\Http\Response
     */
    public function show(WorkStationType $workStationType)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WorkStationType  $workStationType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $work_station_type = WorkStationType::find($id);
        return view( 'admin.work_station_type.edit-station-type',['work_station_type'=> $work_station_type]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WorkStationType  $workStationType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkStationType $workStationType)
    {
        $work_station_type = WorkStationType::find($request->id);
        $work_station_type ->station_type_name = $request->station_type_name;
        $work_station_type->save();

        return redirect('work/station/type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WorkStationType  $workStationType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work_station_type = WorkStationType::find($id);
        $work_station_type->delete();
        return redirect('work/station/type');

    }
}
