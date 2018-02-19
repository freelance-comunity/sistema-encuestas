<?php

namespace App\Http\Controllers\Campus;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Subject;
use App\Campus;
use App\Career;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class SubjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $subject = Subject::all();

        return view('backEnd.campus.subject.index', compact('subject'));
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
        return view('backEnd.campus.subject.create')
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
        $this->validate($request, ['name' => 'required', 'key' => 'required', ]);

        Subject::create($request->all());

        Session::flash('message', 'Materia agregada.');
        Session::flash('status', 'success');

        return redirect('campus/subject');
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
        $subject = Subject::findOrFail($id);

        return view('backEnd.campus.subject.show', compact('subject'));
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
        $subject = Subject::findOrFail($id);
        $campuses = Campus::pluck('name', 'id');
        $careers = Career::pluck('name', 'id');

        return view('backEnd.campus.subject.edit', compact('subject', 'campuses', 'careers'));
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
        $this->validate($request, ['name' => 'required', 'key' => 'required', ]);

        $subject = Subject::findOrFail($id);
        $subject->update($request->all());

        Session::flash('message', 'Materia actualizada.');
        Session::flash('status', 'success');

        return redirect('campus/subject');
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
        $subject = Subject::findOrFail($id);

        $subject->delete();

        Session::flash('message', 'Materia eliminada.');
        Session::flash('status', 'success');

        return redirect('campus/subject');
    }

}
