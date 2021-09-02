<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class InscripcionController extends Controller
{
    public function storeKardex(Request $request)
    {
        $this->validate($request, [
            'nombres'           => 'required',
            'paterno'           => 'nullable|max:100',
            'materno'           => 'nullable|max:100',
            'email'             => 'required|unique:users,email|email|max:250',
            'ano_nacimiento'    => 'required|numeric|min:1950|max:2020',
            'universidad'       => 'nullable|max:250',
            'telefono'          => 'nullable|numeric|min:0|max:99999999999',
            'genero'            => [
                'required',
                Rule::in(['Masculino', 'Femenino'])
            ],
            'ciudad_id'         => 'required|exists:ciudades,id',
            'pais_id'           => 'required|exists:paises,id',
            'carrera_id'        => 'nullable|exists:carreras,id',
            'horario_id'        => 'required|array',
            'horario_id.*'      => 'required|exists:horarios,id'
        ]);



        return response()->json([
            'data'  => 'exito'
        ]);
    }

    public function getHorarios()
    {
        return response()->json([
            'data'  => Horario::join('talleres', 'talleres.id', '=', 'horarios.taller_id')
                ->select('taller', 'encargado', 'cupo', 'inicio', 'fin')
                ->orderBy('taller')
                ->orderBy('encargado')
                ->orderBy('inicio')
                ->orderBy('fin')
                ->get()
        ]);
    }
}
