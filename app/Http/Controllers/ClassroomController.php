<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassroomRequest;
use App\Http\Requests\UpdateClassroomRequest;
use App\Models\Classroom;
use App\Models\Location;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('classrooms.create')->with('locations', Location::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateClassroomRequest $request)
    {                
        $classroom = Classroom::create([
            'name'          => $request->name,            
            'm2'            => $request->m2,
            'capacity'      => $request->capacity,
            'limit_couples' => $request->limit_couples,
            'price_hour'    => $request->price_hour,
            'price_month'   => $request->price_month,
            'dance_shoes'   => $request->dance_shoes,
            'comments'      => $request->comments,
            'color'         => $request->color,            
        ]);

        $classroom->location()->associate($request->location)->save();

        session()->flash('success', 'Classroom saved successfully');

        return redirect(route('locations.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        return view('classrooms.show')->with('classroom', $classroom);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        return view('classrooms.edit')->with('classroom', $classroom)->with('locations', Location::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClassroomRequest $request, Classroom $classroom)
    {
        $classroom->update([
            'name'          => $request->name,            
            'm2'            => $request->m2,
            'capacity'      => $request->capacity,
            'limit_couples' => $request->limit_couples,
            'price_hour'    => $request->price_hour,
            'price_month'   => $request->price_month,
            'dance_shoes'   => $request->dance_shoes,
            'comments'      => $request->comments,
            'color'         => $request->color,            
        ]);

        $classroom->location()->associate($request->location)->save();

        session()->flash('success', 'Classroom updated successfully');

        return redirect(route('locations.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        //
    }
}
