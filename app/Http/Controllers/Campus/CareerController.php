<?php

namespace App\Http\Controllers\Campus;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Career;
use App\Department;
use App\Campus;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class CareerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $career = Career::all();

        return view('backEnd.campus.career.index', compact('career'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {   
        $campuses = Campus::pluck('name', 'id');
        $departments = Department::pluck('name', 'id');
        return view('backEnd.campus.career.create')
        ->with('campuses', $campuses)
        ->with('departments', $departments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'career_key' => 'required', 'description' => 'required', 'dependence' => 'required', 'key_incorporation' => 'required', 'turn' => 'required', ]);

        Career::create($request->all());

        Session::flash('message', 'Carrera agregada.');
        Session::flash('status', 'success');

        return redirect('campus/career');
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
        $career = Career::findOrFail($id);

        return view('backEnd.campus.career.show', compact('career'));
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
        $career = Career::findOrFail($id);
        $campuses = Campus::pluck('name', 'id');
        $departments = Department::pluck('name', 'id');

        return view('backEnd.campus.career.edit', compact('career', 'campuses', 'departments'));
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
        $this->validate($request, ['name' => 'required', 'career_key' => 'required', 'description' => 'required', 'dependence' => 'required', 'key_incorporation' => 'required', 'turn' => 'required', ]);

        $career = Career::findOrFail($id);
        $career->update($request->all());

        Session::flash('message', 'Carrera actualizada.');
        Session::flash('status', 'success');

        return redirect('campus/career');
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
        $career = Career::findOrFail($id);

        $career->delete();

        Session::flash('message', 'Carrera eliminada.');
        Session::flash('status', 'success');

        return redirect('campus/career');
    }

}
