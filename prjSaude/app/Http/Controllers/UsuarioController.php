<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UsuarioModel;
use Illuminate\Http\Request;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = UsuarioModel :: all();
        return $usuario;
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

    public function storeapi(Request $request)
    {
        $usuario = new usuarioModel();

        $usuario->nomeUsuario = $request->nomeUsuario;
        $usuario->senhaUsuario = $request->senhaUsuario;
        $usuario->emailUsuario = $request->emailUsuario;
        $usuario->dataNascUsuario = $request->dataNascUsuario;
        $usuario->generoUsuario = $request->generoUsuario;
        $usuario->fotoUsuario = $request->fotoUsuario;
        $usuario->alturaUsuario = $request->alturaUsuario;
        $usuario->pesoUsuario = $request->pesoUsuario;
        
        $usuario->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
