<?php

namespace App\Http\Controllers\Catalogs;

use App\Http\Controllers\Controller;
use App\Models\AnesthesiaList;
use Illuminate\Http\Request;

class AnesthesiaListController extends Controller
{

    /**
     *  Return json list
     *
     * @return \Illuminate\Http\Response
     */
    public function anesthesias_json(Request $request, AnesthesiaList $anesthesiaList)
    {
        return response()->json($anesthesiaList->search($request->q ?? ""));
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
     * @param  \App\Models\AnesthesiaList  $anesthesiaList
     * @return \Illuminate\Http\Response
     */
    public function show(AnesthesiaList $anesthesiaList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnesthesiaList  $anesthesiaList
     * @return \Illuminate\Http\Response
     */
    public function edit(AnesthesiaList $anesthesiaList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnesthesiaList  $anesthesiaList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnesthesiaList $anesthesiaList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnesthesiaList  $anesthesiaList
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnesthesiaList $anesthesiaList)
    {
        //
    }
}
