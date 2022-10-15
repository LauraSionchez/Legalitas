<?php

namespace App\Http\Controllers;

use App\Models\PosecutorCase;
use App\Http\Requests\StorePosecutorCaseRequest;
use App\Http\Requests\UpdatePosecutorCaseRequest;

class PosecutorCaseController extends Controller
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
     * @param  \App\Http\Requests\StorePosecutorCaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePosecutorCaseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PosecutorCase  $posecutorCase
     * @return \Illuminate\Http\Response
     */
    public function show(PosecutorCase $posecutorCase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PosecutorCase  $posecutorCase
     * @return \Illuminate\Http\Response
     */
    public function edit(PosecutorCase $posecutorCase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePosecutorCaseRequest  $request
     * @param  \App\Models\PosecutorCase  $posecutorCase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePosecutorCaseRequest $request, PosecutorCase $posecutorCase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PosecutorCase  $posecutorCase
     * @return \Illuminate\Http\Response
     */
    public function destroy(PosecutorCase $posecutorCase)
    {
        //
    }
}
