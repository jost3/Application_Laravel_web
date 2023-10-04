<?php

namespace App\Http\Controllers;
use App\Models\Lugare;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    //
    public function index()
    {
        $lugares = Lugare::paginate();
        return view('welcome', compact('lugares'));
    }
}
