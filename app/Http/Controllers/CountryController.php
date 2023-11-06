<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\School;
use App\Models\State;
use App\Models\Tehsil;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $country = Country::orderBy('created_at', 'DESC')->get();
        // dd($country);
        return view('country.index', compact('country'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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


    public function getStates(string $id)
    {
        $states = State::where('country_id', $id)->pluck('name', 'id')->toArray();
        return $states;
        // dd($states);
        // $view = view('statesoptions', compact('states'))->render();
        // return json_encode($view);
    }


    public function getTehsil(string $id)
    {
        $tehsil = Tehsil::where('district_id', $id)->pluck('name', 'id')->toArray();
        return $tehsil;
        // dd($tehsil);
        // $view = view('tehsilsoptions', compact('tehsil'))->render();
        // return json_encode($view);
    }

    public function getSchool(string $id)
    {
        $school = School::where('tehsil_id', $id)->pluck('name', 'id')->toArray();
        return $school;
        // dd($school)
        // $view = view('schooloptions', compact('school'))->render();
        // return json_encode($view);
    }
}
