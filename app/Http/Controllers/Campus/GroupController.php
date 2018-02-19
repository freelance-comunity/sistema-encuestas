<?php

namespace App\Http\Controllers\Campus;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Group;
use App\Campus;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class GroupController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $group = Group::all();

        return view('backEnd.campus.group.index', compact('group'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {   
        $campuses = Campus::pluck('name', 'id');
        return view('backEnd.campus.group.create')
        ->with('campuses', $campuses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['grade' => 'required', 'group' => 'required', 'mode' => 'required', ]);

        Group::create($request->all());

        Session::flash('message', 'Grupo agregado.');
        Session::flash('status', 'success');

        return redirect('campus/group');
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
        $group = Group::findOrFail($id);

        return view('backEnd.campus.group.show', compact('group'));
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
        $group = Group::findOrFail($id);
        $campuses = Campus::pluck('name', 'id');

        return view('backEnd.campus.group.edit', compact('group', 'campuses'));
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
        $this->validate($request, ['grade' => 'required', 'group' => 'required', 'mode' => 'required', ]);

        $group = Group::findOrFail($id);
        $group->update($request->all());

        Session::flash('message', 'Grupo actualizado.');
        Session::flash('status', 'success');

        return redirect('campus/group');
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
        $group = Group::findOrFail($id);

        $group->delete();

        Session::flash('message', 'Grupo eliminado.');
        Session::flash('status', 'success');

        return redirect('campus/group');
    }

}
