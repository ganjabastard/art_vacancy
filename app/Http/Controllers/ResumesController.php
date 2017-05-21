<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResumeRequest;
use App\Mdodels\CommentResume;
use App\Models\Interview;
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
        $resumes = Resume::with('vacancy')->orderBy('updated_at', 'DESC')->paginate(10);
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
    public function store(ResumeRequest $request)
    {
        $resume              = new Resume();
        $resume->email       = $request->email;
        $resume->name        = $request->name;
        $resume->user_id     = auth()->user()->id;
        $resume->description = $request->description;
        $resume->experience  = $request->experience;
        $resume->education   = $request->education;
        $resume->university  = $request->university;
        $resume->birthday    = $request->birthday;
        $resume->status      = $request->status;
        $resume->phone       = $request->phone;
        $resume->link        = $request->link;
        $resume->source      = $request->source;
        $resume->position    = $request->position;
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
        $resume = Resume::find($id);
        $vacancy = Vacancy::isActive()->get()->pluck('title', 'id');
        $comments = CommentResume::where('resume_id', $id)->with('user')->orderBy('created_at', 'DESC')->get();
        $interviews = Interview::where('resume_id', $id)->get();
        return view('resume.edit', compact('resume', 'vacancy', 'comments', 'interviews'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ResumeRequest $request, $id)
    {
        $resume              = Resume::find($id);
        $resume->email       = $request->email;
        $resume->name        = $request->name;
        $resume->user_id     = auth()->user()->id;
        $resume->description = $request->description;
        $resume->experience  = $request->experience;
        $resume->education   = $request->education;
        $resume->university  = $request->university;
        $resume->birthday    = $request->birthday;
        $resume->status      = $request->status;
        $resume->phone       = $request->phone;
        $resume->link        = $request->link;
        $resume->source      = $request->source;
        $resume->position    = $request->position;
        $resume->save();
        return redirect('resume')->with('success', 'Резюме успешно создано.');
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


    /**
     * Добавление комментариев
     */
    public function setComment(Request $request, $id)
    {
        $comennt = new CommentResume();
        $comennt->user_id = auth()->user()->id;
        $comennt->resume_id = $id;
        $comennt->comment = $request->comment;
        $comennt->save();
        return redirect('resume/' . $id . '/edit')->with('success', 'Отзыв успешно доавблен');
    }
}
