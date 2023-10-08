<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
class ReservaController extends Controller
{
    //
    public function store(Request $request)
    {

        $Reserva = new Reserva;
        $Reserva->nombre = $request->name;
        $Reserva->email = $request->email;
        $Reserva->telefono = $request->phone;
        $Reserva->lugar = $request->message;
        $Reserva->save();
        return back()->with('success','formulaio hecho');

           /* 'nombre' => $request->input('name'),
            'email' => $request->input('email'),
            'telefono' => $request->input('phone'),
            'lugar' => $request->input('message'),
        ->save();
        // Puedes redirigir a una página de éxito o devolver una respuesta JSON, según tus necesidades.
        return 'completado';*/
    }
}
