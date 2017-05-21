<?php

namespace App\Http\Controllers;

use App\Http\Requests\VacancyRequest;
use App\Models\Interview;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vacancys = Vacancy::with(['user'])->paginate(10);
        return view('vacancy.index', compact('vacancys', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vacancy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VacancyRequest $request)
    {
        $vacancy              = new Vacancy();
        $vacancy->title       = $request->title;
        $vacancy->description = $request->description;
        $vacancy->user_id     = auth()->user()->id;
        $vacancy->experience  = $request->experience;
        $vacancy->age_start   = $request->age_start;
        $vacancy->age_end     = $request->age_end;
        $vacancy->status      = $request->status;
        $vacancy->active      = isset($request->active) ? 1 : 0;
        $vacancy->save();
        return redirect('vacancy')->with('success', 'Вакансия успешно создана.');
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
        $vacancy = Vacancy::find($id);
        $interview = Interview::where('vacancy_id', $id)->whereNotIn('status', [6, 0])->get();
        return view('vacancy.edit', compact('vacancy', 'interview'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VacancyRequest $request, $id)
    {
        $vacancy              = Vacancy::find($id);
        $vacancy->title       = $request->title;
        $vacancy->description = $request->description;
        $vacancy->user_id     = auth()->user()->id;
        $vacancy->experience  = $request->experience;
        $vacancy->age_start   = $request->age_start;
        $vacancy->age_end     = $request->age_end;
        $vacancy->status      = $request->status;
        $vacancy->active      = isset($request->active) ? 1 : 0;
        $vacancy->save();
        return redirect('vacancy')->with('success', 'Вакансия успешно обновлена.');
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

    }

}
