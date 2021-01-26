<?php

namespace App\Http\Controllers\Programs;

use App\Http\Controllers\Controller;
use App\Models\Programs\UniversityProgram;
use App\Models\User\AppliedProgram;
use Illuminate\Http\Request;

class UniversityProgramController extends Controller
{
    public function index()
    {
        $universityPrograms = UniversityProgram::all();

        return view('pages.programs.universities', compact('universityPrograms'));
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

        if (auth()->user()->userDetail) {
            if (auth()->user()->userDetail->universityDocuments->count() > 0) {

                $appliedProgram = new AppliedProgram([
                    'user_id' => auth()->id(),
                    'university_program_id' => $request->get('university'),
                ]);

                $appliedProgram->save();

                $universityPrograms = UniversityProgram::all();

                return view('pages.programs.universities', compact('universityPrograms'))->with('success', 'Applied Succesfully!');
            }
        }


        $universityPrograms = UniversityProgram::all();

        return view('pages.programs.universities', compact('universityPrograms'))->with('error', 'Please Update your College Details!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programs\UniversityProgram  $universityProgram
     * @return \Illuminate\Http\Response
     */
    public function show(UniversityProgram $universityProgram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programs\UniversityProgram  $universityProgram
     * @return \Illuminate\Http\Response
     */
    public function edit(UniversityProgram $universityProgram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programs\UniversityProgram  $universityProgram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UniversityProgram $universityProgram)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programs\UniversityProgram  $universityProgram
     * @return \Illuminate\Http\Response
     */
    public function destroy(UniversityProgram $universityProgram)
    {
        //
    }
}
