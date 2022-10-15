<?php

namespace App\Http\Controllers;

use App\Models\Affair;
use App\Http\Requests\StoreAffairRequest;
use App\Http\Requests\UpdateAffairRequest;

class AffairController extends Controller
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
     * @param  \App\Http\Requests\StoreAffairRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAffairRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Affair  $affair
     * @return \Illuminate\Http\Response
     */
    public function show(Affair $affair)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Affair  $affair
     * @return \Illuminate\Http\Response
     */
    public function edit(Affair $affair)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAffairRequest  $request
     * @param  \App\Models\Affair  $affair
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAffairRequest $request, Affair $affair)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Affair  $affair
     * @return \Illuminate\Http\Response
     */
    public function destroy(Affair $affair)
    {
        //
    }
}
