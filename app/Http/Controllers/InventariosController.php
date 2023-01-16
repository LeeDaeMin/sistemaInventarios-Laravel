<?php

namespace App\Http\Controllers;

use App\Models\Inventarios;
use App\Http\Requests\StoreInventariosRequest;
use App\Http\Requests\UpdateInventariosRequest;

class InventariosController extends Controller
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
     * @param  \App\Http\Requests\StoreInventariosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInventariosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventarios  $inventarios
     * @return \Illuminate\Http\Response
     */
    public function show(Inventarios $inventarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventarios  $inventarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventarios $inventarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInventariosRequest  $request
     * @param  \App\Models\Inventarios  $inventarios
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInventariosRequest $request, Inventarios $inventarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventarios  $inventarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventarios $inventarios)
    {
        //
    }
}
