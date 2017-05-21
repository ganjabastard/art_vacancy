<?php

namespace App\Http\Controllers;

use App\Http\Requests\InterviewRequest;
use App\Mdodels\CommentResume;
use App\Models\Interview;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $interviews = Interview::with(['user', 'resume', 'vacancy'])->whereNotIn('status', [6, 0])->orderBy('created_at', "DESC");
        $interviews = $interviews->paginate(10);
        return view('interview.index', compact('interviews', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InterviewRequest $request)
    {
        $interview = new Interview();
        $interview->vacancy_id = $request->vacancy_id;
        $interview->resume_id = $request->resume_id;
        $interview->user_id = auth()->user()->id;
        $interview->date = Carbon::parse($request->date . " " . $request->time)->format('Y-m-d H:i:s');
        $interview->description = $request->description;
        $interview->status = 1;
        $interview->save();
        return redirect('interview')->with('success', 'Собеседование успешно добавлено.');
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
        $interview = Interview::find($id);
        return view('interview.edit', compact('interview'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InterviewRequest $request, $id)
    {
        $interview = Interview::find($id);
        $interview->vacancy_id = $request->vacancy_id;
        $interview->resume_id = $request->resume_id;
        $interview->user_id = auth()->user()->id;
        $interview->date = Carbon::parse($request->date . " " . $request->time)->format('Y-m-d H:i:s');
        $interview->description = $request->description;
        $interview->status = $request->status;
        $interview->save();
        return redirect('interview')->with('success', 'Собеседование успешно обновлено.');
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
