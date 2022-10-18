<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCollegeRequest;
use App\Http\Requests\UpdateCollegeRequest;
use App\Models\College;

class CollegeController extends Controller
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
     * @param  \App\Http\Requests\StoreCollegeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCollegeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\Response
     */
    public function show(College $college)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\Response
     */
    public function edit(College $college)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCollegeRequest  $request
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCollegeRequest $request, College $college)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\Response
     */
    public function destroy(College $college)
    {
        //
    }
}
