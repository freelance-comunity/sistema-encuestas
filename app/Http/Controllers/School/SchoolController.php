<?php

namespace App\Http\Controllers\School;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\School;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class SchoolController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $school = School::all();

        return view('backEnd.school.school.index', compact('school'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.school.school.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'state' => 'required', 'address' => 'required', ]);

        School::create($request->all());

        Session::flash('message', 'Escuela agregada.');
        Session::flash('status', 'success');

        return redirect('school/school');
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
        $school = School::findOrFail($id);

        return view('backEnd.school.school.show', compact('school'));
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
        $school = School::findOrFail($id);

        return view('backEnd.school.school.edit', compact('school'));
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
        $this->validate($request, ['name' => 'required', 'state' => 'required', 'address' => 'required', ]);

        $school = School::findOrFail($id);
        $school->update($request->all());

        Session::flash('message', 'Escuela actualizada.');
        Session::flash('status', 'success');

        return redirect('school/school');
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
        $school = School::findOrFail($id);

        $school->delete();

        Session::flash('message', 'Escuela eliminada.');
        Session::flash('status', 'success');

        return redirect('school/school');
    }

}
