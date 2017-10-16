<?php

namespace App\Http\Controllers;

use App\gites;
use App\Step;
use Illuminate\Http\Request;


class StepController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $steps = Step::all();

        return response()->json($steps);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('steps.create', [ 'steps' => Step::orderBy('steporder', 'asc')->get() ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stepsAfter = Step::where('steporder', '>=', $request->steporder)->get();

        foreach ($stepsAfter as  $step) {
            $step->steporder++;
            $step->save();
        }

        $step = new Step();
        $step->name=$request->name;
        $step->latitude=$request->latitude;
        $step->longitude=$request->longitude;
        $step->steporder=$request->steporder;
        $step->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Step $step)
    {
        return response()->json($step->gites);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Step $step)
    {
        return view('steps.edit', ['step' => $step]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Step $step)
    {
        $step->name = $request->name;
        $step->latitude = $request->latitude;
        $step->longitude = $request->longitude;
        // $step->steporder = $request->steporder;
        $step->save();
        return redirect(url('steps/create'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
