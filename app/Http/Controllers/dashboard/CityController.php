<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;

use App\Models\City;
use App\Models\Contact;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $cities = City::all();
        return view('dashboard.cities.index',compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.cities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);


        City::create([
            'title' => $request->title,
        ]);


        return redirect()->route('cities.index')->with('success','City Created Successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {

        $contacts = Contact::where('city_id','=',$city->id)->get();


        return view('dashboard.cities.show',compact('contacts'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        //
    }
}
