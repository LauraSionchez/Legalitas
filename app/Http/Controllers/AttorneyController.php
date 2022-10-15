<?php

namespace App\Http\Controllers;

use App\Models\Attorney;
use App\Http\Requests\StoreAttorneyRequest;
use App\Http\Requests\UpdateAttorneyRequest;

class AttorneyController extends Controller
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
     * @param  \App\Http\Requests\StoreAttorneyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttorneyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attorney  $attorney
     * @return \Illuminate\Http\Response
     */
    public function show(Attorney $attorney)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attorney  $attorney
     * @return \Illuminate\Http\Response
     */
    public function edit(Attorney $attorney)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttorneyRequest  $request
     * @param  \App\Models\Attorney  $attorney
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttorneyRequest $request, Attorney $attorney)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attorney  $attorney
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attorney $attorney)
    {
        //
    }
}
