<?php

namespace App\Http\Controllers\Campus;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cycle;
use App\Campus;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class CycleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $cycle = Cycle::all();

        return view('backEnd.campus.cycle.index', compact('cycle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {   
        $campuses = Campus::pluck('name', 'id');
        return view('backEnd.campus.cycle.create')
        ->with('campuses', $campuses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['cycle_year' => 'required', 'cycle_quarter' => 'required', 'description' => 'required', 'start_cycle' => 'required', 'end_cycle' => 'required', ]);

        $input = $request->all();
        $count = Cycle::where('status',1)->get();
        if ($count->count() >= 1) {
           $input['status'] = 0;
        }
        Cycle::create($input);

        Session::flash('message', 'Ciclo agregado.');
        Session::flash('status', 'success');

        return redirect('campus/cycle');
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
        $cycle = Cycle::findOrFail($id);

        return view('backEnd.campus.cycle.show', compact('cycle'));
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
        $cycle = Cycle::findOrFail($id);
        $campuses = Campus::pluck('name', 'id');

        return view('backEnd.campus.cycle.edit', compact('cycle', 'campuses'));
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
        $this->validate($request, ['cycle_year' => 'required', 'cycle_quarter' => 'required', 'description' => 'required', 'start_cycle' => 'required', 'end_cycle' => 'required', ]);

        $input = $request->all();
        $count = Cycle::where('status',1)->get();
        if ($count->count() >= 1) {
           $input['status'] = 0;
        }

        $cycle = Cycle::findOrFail($id);
        $cycle->update($input);

        Session::flash('message', 'Ciclo actualizado.');
        Session::flash('status', 'success');

        return redirect('campus/cycle');
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
        $cycle = Cycle::findOrFail($id);

        $cycle->delete();

        Session::flash('message', 'Ciclo eliminado.');
        Session::flash('status', 'success');

        return redirect('campus/cycle');
    }

}
