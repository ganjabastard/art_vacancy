<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class ResumesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $resumes = new Resume();
        $resumes = $resumes->paginate(10);
        return view('resume.index', compact('resumes', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vacancy = Vacancy::isActive()->get()->pluck('title', 'id');
        return view('resume.create', compact('vacancy'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resume              = new Resume();
        $resume->vacancy_id  = $request->vacancy_id;
        $resume->name        = $request->name;
        $resume->user_id     = auth()->user()->id;
        $resume->descripion  = $request->descripion;
        $resume->experience  = $request->experience;
        $resume->education   = $request->education;
        $resume->university  = $request->university;
        $resume->save();
        return redirect('resume')->with('success', 'Резюме успешно создано.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
