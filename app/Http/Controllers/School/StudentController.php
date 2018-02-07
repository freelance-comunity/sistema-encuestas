<?php

namespace App\Http\Controllers\School;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Student;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class StudentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $student = Student::all();

        return view('backEnd.school.student.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.school.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['student_id' => 'required', 'name' => 'required', 'last_name' => 'required', 'gender' => 'required', 'birthdate' => 'required', 'state_birth' => 'required', 'town_birth' => 'required', 'curp' => 'required', 'sep' => 'required', 'state' => 'required', 'town' => 'required', 'country' => 'required', 'street' => 'required', 'house_number' => 'required', 'colony' => 'required', 'post_code' => 'required', 'email' => 'required', 'tutor_name' => 'required', 'in_law' => 'required', 'tutor_phone' => 'required', 'average' => 'required', ]);

        Student::create($request->all());

        Session::flash('message', 'Alumno agregado.');
        Session::flash('status', 'success');

        return redirect('school/student');
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
        $student = Student::findOrFail($id);

        return view('backEnd.school.student.show', compact('student'));
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
        $student = Student::findOrFail($id);

        return view('backEnd.school.student.edit', compact('student'));
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
        $this->validate($request, ['student_id' => 'required', 'name' => 'required', 'last_name' => 'required', 'gender' => 'required', 'birthdate' => 'required', 'state_birth' => 'required', 'town_birth' => 'required', 'curp' => 'required', 'sep' => 'required', 'state' => 'required', 'town' => 'required', 'country' => 'required', 'street' => 'required', 'house_number' => 'required', 'colony' => 'required', 'post_code' => 'required', 'email' => 'required', 'tutor_name' => 'required', 'in_law' => 'required', 'tutor_phone' => 'required', 'average' => 'required', ]);

        $student = Student::findOrFail($id);
        $student->update($request->all());

        Session::flash('message', 'Alumno actualizado.');
        Session::flash('status', 'success');

        return redirect('school/student');
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
        $student = Student::findOrFail($id);

        $student->delete();

        Session::flash('message', 'Alumno eliminado.');
        Session::flash('status', 'success');

        return redirect('school/student');
    }

}
