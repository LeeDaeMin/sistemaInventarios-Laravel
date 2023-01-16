<?php

namespace App\Http\Controllers;

use App\Models\Bodegas;
use App\Http\Requests\StoreBodegasRequest;
use App\Http\Requests\UpdateBodegasRequest;

class BodegasController extends Controller
{
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
     * @param  \App\Http\Requests\StoreBodegasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBodegasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bodegas  $bodegas
     * @return \Illuminate\Http\Response
     */
    public function show(Bodegas $bodegas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bodegas  $bodegas
     * @return \Illuminate\Http\Response
     */
    public function edit(Bodegas $bodegas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBodegasRequest  $request
     * @param  \App\Models\Bodegas  $bodegas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBodegasRequest $request, Bodegas $bodegas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bodegas  $bodegas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bodegas $bodegas)
    {
        //
    }
}
