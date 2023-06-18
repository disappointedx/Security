<?php

namespace App\Http\Controllers;

use App\Models\Metki;
use App\Models\User;
use Illuminate\Http\Request;

class MetkiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all()->map(function ($user) {
        return [
            'user' => $user,
            'metki' => $user->metkis
        ];
    });
        return view('metki', ['data' => $data]);
  
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Metki  $metki
     * @return \Illuminate\Http\Response
     */
    public function show(Metki $metki)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Metki  $metki
     * @return \Illuminate\Http\Response
     */
    public function edit(Metki $metki)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Metki  $metki
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Metki $metki)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Metki  $metki
     * @return \Illuminate\Http\Response
     */
    public function destroy(Metki $metki)
    {
        //
    }
}
