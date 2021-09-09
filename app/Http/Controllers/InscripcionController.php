<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\Pais;
use App\Models\User;
use App\Models\Kardex;
use App\Models\Carrera;
use App\Models\Taller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use LengthException;

class InscripcionController extends Controller
{
    public function __invoke()
    {
        return view('inicio');
    }
    public function create(){
        $pais = Pais::all();
        $ciudad = Ciudad::all();
        $carrera = Carrera::all();
        $sql = "SELECT taller, encargado, cupo, inicio, fin, horarios.id FROM talleres, horarios WHERE talleres.id = horarios.taller_id";
        $horarios = DB::select($sql);
        return view('formulario', compact('pais', 'ciudad', 'carrera', 'horarios'));
    }
    public function storeKardex(Request $request)
    {   
       
        $request->validate([
           
            'nombres'   => 'required|max:250',
            'paterno'   => 'nullable|max:250',
            'materno'   => 'nullable|max:250',
            'ano_nacimiento' => 'nullable|numeric|min:1950|max:2020',
            'genero'    => 'required',
            'telefono'  => 'nullable|max:15',
            'email'     => 'required|email|unique:users,email',
            'universidad' => 'nullable|max:200',
            'carrera_id' => 'nullable|exists:carreras,id',
            'pais_id'   => 'nullable|exists:paises,id',
            'ciudad_id' => 'nullable|exists:ciudades,id'
            
        ]);
      
        $usuario = new User();
        $usuario->password = bcrypt($request->nombres.$request->email);
        $usuario->nombres = $request->nombres;
        $usuario->paterno = $request->paterno;
        $usuario->materno = $request->materno;
        $usuario->ano_nacimiento = $request->ano_nacimiento;
        $usuario->genero = $request->genero;
        $usuario->telefono = $request->telefono;
        $usuario->email = $request->email;
        $usuario->universidad = $request->universidad;
        $usuario->carrera_id = $request->carrera_id;
        $usuario->pais_id = $request->pais_id;
        $usuario->ciudad_id = $request->ciudad_id;
        $usuario->save();

        for($x = 0; $x < count($request->taller); $x++){
            $kardex1 = new Kardex;
            $kardex1->user_id = $usuario->id;
            $kardex1->horario_id = $request->taller[$x];
            $kardex1->save();



            $cupo = Taller::where('id', '=', $request->taller[$x]);
            $Ecupo = $cupo -1;
            Taller::where('id', '=', $request->taller[$x])->update($Ecupo-1);
        }
        return view('/');
    }
}
