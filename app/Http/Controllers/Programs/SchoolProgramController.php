<?php

namespace App\Http\Controllers\Programs;

use App\Http\Controllers\Controller;
use App\Models\Programs\SchoolProgram;
use App\Models\User\AppliedProgram;
use Illuminate\Http\Request;

class SchoolProgramController extends Controller
{
    public function index()
    {
        $schoolPrograms = SchoolProgram::all();

        return view('pages.programs.schools', compact('schoolPrograms'));
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
        $appliedProgram = new AppliedProgram([
            'school_program_id' => $request->get('school'),
        ]);

        $appliedProgram->save();

        $schoolPrograms = SchoolProgram::all();

        return view('pages.programs.schools', compact('schoolPrograms'))->with('success', 'Applied Succesfully!');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programs\SchoolProgram  $schoolProgram
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolProgram $schoolProgram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programs\SchoolProgram  $schoolProgram
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolProgram $schoolProgram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programs\SchoolProgram  $schoolProgram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SchoolProgram $schoolProgram)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programs\SchoolProgram  $schoolProgram
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolProgram $schoolProgram)
    {
        //
    }
}
