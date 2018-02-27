<?php

namespace App\Http\Controllers\Poll;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Poll;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class PollController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $poll = Poll::all();

        return view('backEnd.poll.poll.index', compact('poll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.poll.poll.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'type' => 'required', 'description' => 'required', 'start_message' => 'required', 'end_message' => 'required', ]);

        Poll::create($request->all());

        Session::flash('message', 'Encuesta agregada.');
        Session::flash('status', 'success');

        return redirect('poll/poll');
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
        $poll = Poll::findOrFail($id);

        return view('backEnd.poll.poll.show', compact('poll'));
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
        $poll = Poll::findOrFail($id);

        return view('backEnd.poll.poll.edit', compact('poll'));
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
        $this->validate($request, ['name' => 'required', 'type' => 'required', 'description' => 'required', 'start_message' => 'required', 'end_message' => 'required', ]);

        $poll = Poll::findOrFail($id);
        $poll->update($request->all());

        Session::flash('message', 'Encuesta actualizada.');
        Session::flash('status', 'success');

        return redirect('poll/poll');
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
        $poll = Poll::findOrFail($id);

        $poll->delete();

        Session::flash('message', 'Encuesta eliminada.');
        Session::flash('status', 'success');

        return redirect('poll/poll');
    }

    /**
     * Search the specified resource from storage.
     * And we show the question creation view
     * @param  int  $id
     *
     * @return Response
     */
    public function addQuestion($id)
    {
        $poll = Poll::findOrFail($id);
        return view('backEnd.poll.question.create')
        ->with('poll', $poll);
    }

}
