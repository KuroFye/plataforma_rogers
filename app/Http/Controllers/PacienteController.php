<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PacienteController extends Controller
{
    public function viewCrearPaciente(){
        return view('creacion.crearPaciente');
    }
}