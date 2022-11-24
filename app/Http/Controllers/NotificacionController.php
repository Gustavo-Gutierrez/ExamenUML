<?php

namespace App\Http\Controllers;

use App\Models\Notificacion;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificacionController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $notificacion = new Notificacion;
            $notificacion->contenido = 'Invitacion para el proyecto xd';
            $notificacion->user_id = $request->user_id;
            $notificacion->proyecto_id = $request->proyecto_id;
            $notificacion->save();
            return redirect()->route('proyectos.usuarios', $request->proyecto_id)->with('message', 'Se notifico al usuario exitosamente')->with('idN');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ha ocurrido un error' . $e->getMessage());
        }
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

    public function aceptar(Request $request, Notificacion $notificacion){
        DB::table('participas')->insert([
            'proyecto_id' => $notificacion->proyecto_id,
            'user_id'=> $notificacion->user_id
        ]);
        $notificacion->aceptado = 1;
        $notificacion->update();
        return redirect()->route('proyectos.index');
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
        $notificacion = Notificacion::find($id);
        $proyecto_id = $notificacion->proyecto_id;
        $notificacion->delete();
        return redirect()->route('proyectos.usuarios', $proyecto_id);
    }
}
