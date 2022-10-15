<?php

namespace App\Http\Controllers;

use App\Models\TbTable;
use App\Http\Requests\StoreTbTableRequest;
use App\Http\Requests\UpdateTbTableRequest;

class TbTableController extends Controller
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
     * @param  \App\Http\Requests\StoreTbTableRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTbTableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TbTable  $tbTable
     * @return \Illuminate\Http\Response
     */
    public function show(TbTable $tbTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TbTable  $tbTable
     * @return \Illuminate\Http\Response
     */
    public function edit(TbTable $tbTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTbTableRequest  $request
     * @param  \App\Models\TbTable  $tbTable
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTbTableRequest $request, TbTable $tbTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TbTable  $tbTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(TbTable $tbTable)
    {
        //
    }
}
