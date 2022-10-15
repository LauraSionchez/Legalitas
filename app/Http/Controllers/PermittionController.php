<?php

namespace App\Http\Controllers;

use App\Models\Permittion;
use App\Http\Requests\StorePermittionRequest;
use App\Http\Requests\UpdatePermittionRequest;

class PermittionController extends Controller
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
     * @param  \App\Http\Requests\StorePermittionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermittionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permittion  $permittion
     * @return \Illuminate\Http\Response
     */
    public function show(Permittion $permittion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permittion  $permittion
     * @return \Illuminate\Http\Response
     */
    public function edit(Permittion $permittion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePermittionRequest  $request
     * @param  \App\Models\Permittion  $permittion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermittionRequest $request, Permittion $permittion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permittion  $permittion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permittion $permittion)
    {
        //
    }
}
