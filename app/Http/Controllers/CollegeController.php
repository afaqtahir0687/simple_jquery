<?php

namespace App\Http\Controllers;
use App\Models\College;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $college = College::get();
        return view('college.index', compact('college'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getTeacher($id)
    {
        $teacher = Teacher::where('college_id', $id)->pluck('name', 'id')->toArray();
        dd($teacher);
        return $teacher;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
