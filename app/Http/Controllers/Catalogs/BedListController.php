<?php

namespace App\Http\Controllers\Catalogs;

use App\Http\Controllers\Controller;
use App\Models\Bed;
use Illuminate\Http\Request;

class BedListController extends Controller
{
    /**
     *  Return json list
     *
     * @return \Illuminate\Http\Response
     */
    public function beds_json(Request $request, Bed $bed)
    {
        return response()->json($bed->search($request->q ?? ""));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bed  $bed
     * @return \Illuminate\Http\Response
     */
    public function show(Bed $bed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bed  $bed
     * @return \Illuminate\Http\Response
     */
    public function edit(Bed $bed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bed  $bed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bed $bed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bed  $bed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bed $bed)
    {
        //
    }
}
