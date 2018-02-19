<?php

namespace App\Http\Controllers\Campus;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Department;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use App\Campus;

class DepartmentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $department = Department::all();

        return view('backEnd.campus.department.index', compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {   
        $campuses = Campus::pluck('name', 'id');
        return view('backEnd.campus.department.create')
        ->with('campuses', $campuses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', ]);

        Department::create($request->all());

        Session::flash('message', 'Departamento agregado.');
        Session::flash('status', 'success');

        return redirect('campus/department');
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
        $department = Department::findOrFail($id);

        return view('backEnd.campus.department.show', compact('department'));
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
        $department = Department::findOrFail($id);
        $campuses = Campus::pluck('name', 'id');

        return view('backEnd.campus.department.edit', compact('department', 'campuses'));
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
        $this->validate($request, ['name' => 'required', ]);

        $department = Department::findOrFail($id);
        $department->update($request->all());

        Session::flash('message', 'Departamento actualizado.');
        Session::flash('status', 'success');

        return redirect('campus/department');
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
        $department = Department::findOrFail($id);

        $department->delete();

        Session::flash('message', 'Departamento eliminado.');
        Session::flash('status', 'success');

        return redirect('campus/department');
    }

}
