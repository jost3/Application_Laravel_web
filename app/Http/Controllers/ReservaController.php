<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
class ReservaController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $Reserva = new Reserva;
        $Reserva->nombre = $request->name;
        $Reserva->email = $request->email;
        $Reserva->telefono = $request->phone;
        $Reserva->lugar = $request->message;
        $Reserva->save();
        return back()->with('success','formulaio hecho');

    }
}
