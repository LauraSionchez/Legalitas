<?php

namespace App\Http\Controllers;

use App\Models\Submodule;
use App\Http\Requests\StoreSubmoduleRequest;
use App\Http\Requests\UpdateSubmoduleRequest;

class SubmoduleController extends Controller
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
     * @param  \App\Http\Requests\StoreSubmoduleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubmoduleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Submodule  $submodule
     * @return \Illuminate\Http\Response
     */
    public function show(Submodule $submodule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Submodule  $submodule
     * @return \Illuminate\Http\Response
     */
    public function edit(Submodule $submodule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubmoduleRequest  $request
     * @param  \App\Models\Submodule  $submodule
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubmoduleRequest $request, Submodule $submodule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Submodule  $submodule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submodule $submodule)
    {
        //
    }
}
