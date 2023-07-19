<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lead = new Lead;
        $lead->first_name = $request->first_name;
        $lead->middle_name = $request->middle_name;
        $lead->last_name = $request->last_name;

        $lead->save();
    }

    /**
     * Return the specified resource.
     */
    public function find(string $id)
    {
        return Lead::find($id)->toJson();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lead = Lead::find($id);
        $lead->first_name = $request->first_name;
        $lead->middle_name = $request->middle_name;
        $lead->last_name = $request->last_name;

        $lead->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
