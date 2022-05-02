<?php

namespace App\Http\Controllers;

use App\Models\UserPerfil;
use App\Http\Requests\StoreUserPerfilRequest;
use App\Http\Requests\UpdateUserPerfilRequest;

class UserPerfilController extends Controller
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
     * @param  \App\Http\Requests\StoreUserPerfilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserPerfilRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserPerfil  $userPerfil
     * @return \Illuminate\Http\Response
     */
    public function show(UserPerfil $userPerfil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserPerfil  $userPerfil
     * @return \Illuminate\Http\Response
     */
    public function edit(UserPerfil $userPerfil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserPerfilRequest  $request
     * @param  \App\Models\UserPerfil  $userPerfil
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserPerfilRequest $request, UserPerfil $userPerfil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserPerfil  $userPerfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserPerfil $userPerfil)
    {
        //
    }
}
