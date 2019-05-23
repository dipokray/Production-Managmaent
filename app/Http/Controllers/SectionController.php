<?php

namespace App\Http\Controllers;

use App\Category;
use App\section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = section::all();
        return view('admin.section.index-section',['sections'=>$sections]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $section = new section();
//         $section->section_name = $request->section_name;
//         $section->save();
        Section::create($request->all());

         return redirect('/add/section');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(section $section)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $section = section::find($id);
        return view('admin.section.edit-section',['section'=> $section]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, section $section)
    {
        $section = section::find($request->section_id);
        $section->section_name = $request->section_name;
        $section->save();

        return redirect('/add/section');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section = section::find($id);
        $section->delete();
        return redirect('/add/section');

    }
}
