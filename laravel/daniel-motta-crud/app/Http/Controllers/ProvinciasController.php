<?php

namespace App\Http\Controllers;

use App\Models\Provincias;
use Illuminate\Http\Request;

class ProvinciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('provincias/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provincias/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Provincias::create(
            $request->all()
        );

        return redirect()->back()
            ->with('success','Creado correctamenchi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provincias  $provincias
     * @return \Illuminate\Http\Response
     */
    public function show(Provincias $provincias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provincias  $provincias
     * @return \Illuminate\Http\Response
     */
    public function edit(Provincias $provincias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provincias  $provincias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provincias $provincias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provincias  $provincias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provincias $provincias)
    {
        //
    }
}
