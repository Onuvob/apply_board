<?php

namespace App\Http\Controllers\Programs;

use App\Http\Controllers\Controller;
use App\Models\Programs\CollegeProgram;
use App\Models\User\AppliedProgram;
use Illuminate\Http\Request;

class CollegeProgramController extends Controller
{
    public function index()
    {
        $collegePrograms = CollegeProgram::all();

        return view('pages.programs.colleges', compact('collegePrograms'));
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
        if (auth()->user()->userDetail)
        {
            if (auth()->user()->userDetail->collegeDocuments->count())
            {
                $appliedProgram = new AppliedProgram([
                    'user_id' => auth()->id(),
                    'college_program_id' => $request->get('college'),
                ]);
        
                $appliedProgram->save();
        
                $collegePrograms = CollegeProgram::all();
        
                return view('pages.programs.colleges', compact('collegePrograms'))->with('success', 'Applied Succesfully!');
            }
        }

        $collegePrograms = CollegeProgram::all();
        
        return view('pages.programs.colleges', compact('collegePrograms'))->with('error', 'Please Update your College Details!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programs\CollegeProgram  $collegeProgram
     * @return \Illuminate\Http\Response
     */
    public function show(CollegeProgram $collegeProgram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programs\CollegeProgram  $collegeProgram
     * @return \Illuminate\Http\Response
     */
    public function edit(CollegeProgram $collegeProgram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programs\CollegeProgram  $collegeProgram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CollegeProgram $collegeProgram)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programs\CollegeProgram  $collegeProgram
     * @return \Illuminate\Http\Response
     */
    public function destroy(CollegeProgram $collegeProgram)
    {
        //
    }
}
