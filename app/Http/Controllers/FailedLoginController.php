<?php

namespace App\Http\Controllers;

use App\Models\FailedLogin;
use App\Http\Requests\StoreFailedLoginRequest;
use App\Http\Requests\UpdateFailedLoginRequest;

class FailedLoginController extends Controller
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
     * @param  \App\Http\Requests\StoreFailedLoginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFailedLoginRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FailedLogin  $failedLogin
     * @return \Illuminate\Http\Response
     */
    public function show(FailedLogin $failedLogin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FailedLogin  $failedLogin
     * @return \Illuminate\Http\Response
     */
    public function edit(FailedLogin $failedLogin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFailedLoginRequest  $request
     * @param  \App\Models\FailedLogin  $failedLogin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFailedLoginRequest $request, FailedLogin $failedLogin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FailedLogin  $failedLogin
     * @return \Illuminate\Http\Response
     */
    public function destroy(FailedLogin $failedLogin)
    {
        //
    }
}
