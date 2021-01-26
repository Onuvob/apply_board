<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\College;
use App\Models\User\School;
use App\Models\User\University;
use App\Models\User\UserDetail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $userDetail = new UserDetail();

        if($request->school_name) $userDetail->school_name = $request->school_name;
        if($request->college_name) $userDetail->college_name = $request->college_name;
        if($request->college_name) $userDetail->university_name = $request->university_name;

        $userDetail->user_id = auth()->id();

        $userDetail->save();

        if ($schoolFile = $request->file('school_document')) {

            $name = time().'_'.$schoolFile->getClientOriginalName();
            // Define folder path
            $path = '/school/docs/';
            $folder = public_path($path);

            $schoolFile->move($folder,$name);
            // Set user profile image path in database to filePath

            $schoolDocs = new School();
            $schoolDocs->document = $path.$name;
            $schoolDocs->user_detail_id = $userDetail->id;
            $schoolDocs->save();
        }


        if ($collegeFile = $request->file('college_document'))
        {
            $name = time().'_'.$collegeFile->getClientOriginalName();
            // Define folder path
            $path = '/college/docs/';
            $folder = public_path($path);

            $collegeFile->move($folder,$name);
            // Set user profile image path in database to filePath

            $collegeDocs = new College();
            $collegeDocs->document = $path.$name;
            $collegeDocs->user_detail_id = $userDetail->id;
            $collegeDocs->save();
        }

        if ($universityFile = $request->file('university_document'))
        {
            $name = time().'_'.$universityFile->getClientOriginalName();
            // Define folder path
            $path = '/university/docs/';
            $folder = public_path($path);

            $universityFile->move($folder,$name);
            // Set user profile image path in database to filePath

            $universityDocs = new University();
            $universityDocs->document = $path.$name;
            $universityDocs->user_detail_id = $userDetail->id;
            $universityDocs->save();
        }

        return view('home')->with('success', 'Applied Succesfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function show(UserDetail $userDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDetail $userDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserDetail $userDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDetail $userDetail)
    {
        //
    }
}
