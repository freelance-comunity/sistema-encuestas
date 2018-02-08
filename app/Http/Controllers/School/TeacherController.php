<?php

namespace App\Http\Controllers\School;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Teacher;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class TeacherController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $teacher = Teacher::all();

        return view('backEnd.school.teacher.index', compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.school.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'last_name' => 'required', 'second_lastname' => 'required', 'email' => 'required', ]);

        Teacher::create($request->all());

        Session::flash('message', 'Maestro agregado.');
        Session::flash('status', 'success');

        return redirect('school/teacher');
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
        $teacher = Teacher::findOrFail($id);

        return view('backEnd.school.teacher.show', compact('teacher'));
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
        $teacher = Teacher::findOrFail($id);

        return view('backEnd.school.teacher.edit', compact('teacher'));
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
        $this->validate($request, ['name' => 'required', 'last_name' => 'required', 'second_lastname' => 'required', 'email' => 'required', ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());

        Session::flash('message', 'Maestro actualizado.');
        Session::flash('status', 'success');

        return redirect('school/teacher');
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
        $teacher = Teacher::findOrFail($id);

        $teacher->delete();

        Session::flash('message', 'Maestro eliminado.');
        Session::flash('status', 'success');

        return redirect('school/teacher');
    }

}
