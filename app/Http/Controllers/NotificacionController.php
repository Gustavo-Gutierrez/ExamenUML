<?php

namespace App\Http\Controllers;

use App\Models\Notificacion;
use App\Models\Proyecto;
use App\Models\User;
use App\Notifications\c4notificacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification as emailNotificacion;
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
        $user = Auth::user();
        $notificaciones = $user->invitaciones()->where('leido', 0)->get();
        return view('auth.notifications', compact('notificaciones'));
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

            $proyecto = Proyecto::find($request->proyecto_id);
            $notificacion = new Notificacion;
            $notificacion->contenido = auth()->user()->name . ' te esta invitando al proyecto: ' . $proyecto->nombre . ' como colaborador...Tu equipo te necesita';
            $notificacion->user_id = $request->user_id;
            $notificacion->proyecto_id = $request->proyecto_id;
            $notificacion->save();

            DB::table('participas')->insert([
                'proyecto_id' => $notificacion->proyecto_id,
                'user_id' => $notificacion->user_id
            ]);

            $user = User::find($request->user_id);

            $url = 'http://c4diagram.test/diagramas/'.$request->proyecto_id;

            $email = [
                'subject' =>'Inivitacion Proyecto: ' . $proyecto->nombre,
                'saludo' => 'Hola que tal ' . $user->name,
                'contenido' => $notificacion->contenido,
                'botonTexto' => 'Ingresar al proyecto',
                'url' => $url,
                'nota' => 'Al ingresar al proyecto podras participar en todas los distintos diagramas sobre los que tu equipo te permitira trabajar'
            ];

            emailNotificacion::send($user, new c4notificacion($email));

            return redirect()->route('proyectos.usuarios', $request->proyecto_id)->with('message', 'Se notifico al usuario exitosamente');
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

    public function leer(Request $request, Notificacion $notificacion)
    {
        /* DB::table('participas')->insert([
            'proyecto_id' => $notificacion->proyecto_id,
            'user_id' => $notificacion->user_id
        ]); */
        $notificacion->leido = 1;
        $notificacion->update();
        return redirect()->back();
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
