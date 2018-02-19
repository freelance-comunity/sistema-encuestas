<?php

namespace App\Http\Controllers\Campus;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Study;
use App\Career;
use App\Campus;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class StudyController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $study = Study::all();

        return view('backEnd.campus.study.index', compact('study'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {   
        $campuses = Campus::pluck('name', 'id');
        $careers = Career::pluck('name', 'id');
        return view('backEnd.campus.study.create')
        ->with('campuses', $campuses)
        ->with('careers', $careers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['key' => 'required', 'description' => 'required', ]);

        Study::create($request->all());

        Session::flash('message', 'Plan de estudio agregado.');
        Session::flash('status', 'success');

        return redirect('campus/study');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $study = Study::findOrFail($id);

        return view('backEnd.campus.study.show', compact('study'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $study = Study::findOrFail($id);
        $campuses = Campus::pluck('name', 'id');
        $careers = Career::pluck('name', 'id');

        return view('backEnd.campus.study.edit', compact('study', 'campuses', 'careers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['key' => 'required', 'description' => 'required', ]);

        $study = Study::findOrFail($id);
        $study->update($request->all());

        Session::flash('message', 'Plan de estudio actualizado.');
        Session::flash('status', 'success');

        return redirect('campus/study');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $study = Study::findOrFail($id);

        $study->delete();

        Session::flash('message', 'Plan de estudio eliminado.');
        Session::flash('status', 'success');

        return redirect('campus/study');
    }

}
