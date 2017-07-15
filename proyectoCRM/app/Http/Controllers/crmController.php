<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Mail\Message;
use App\Cliente;
use App\Promocion;
use Mail;
use DB;

class crmController extends Controller
{
	 public function registrarC(){
    	$clientes=Cliente::all();
    	return view('altaclientes', compact('clientes'));
    }


     public function guardar(Request $datos){
    	$cliente = new Cliente();
    	$cliente->nombre=$datos->input('nombre');
    	$cliente->correo=$datos->input('correo');
    	$cliente->fecha_nacimiento=$datos->input('fecha_nacimiento');
    	$cliente->sexo=$datos->input('sexo');
    	$cliente->ocupacion=$datos->input('ocupacion');
    	$cliente->save();
        flash('Gracias por registrarte!') -> success();
        Mail::send('emails', ['cliente' => $cliente], function($message) use ($cliente){
                $message->from('agencontacto@gmail.com', 'Mazda México');
                $message->to($cliente->correo, $cliente->nombre)->subject('Gracias por registrarte ' . $cliente->nombre);
        });
    	return redirect('/');

    }

    public function master(){
    	return view('adminpantalla');
    }

     public function guardarC(Request $datos){ /*el request trae todos los input*/
    	$cliente = new Cliente();
    	/*base de datos*/ /*formulario*/
		$cliente->nombre=$datos->input('nombre');
		$cliente->correo=$datos->input('correo');
		$cliente->fecha_nacimiento=$datos->input('fecha_nacimiento');
		$cliente->sexo=$datos->input('sexo');
		$cliente->ocupacion=$datos->input('ocupacion');
		$cliente->save();

        Mail::send('emails', ['cliente' => $cliente], function($message) use ($cliente){
                $message->from('agencontacto@gmail.com', 'Mazda México');
                $message->to($cliente->correo, $cliente->nombre)->subject('Gracias por registrarte ' . $cliente->nombre);
        });

		return redirect('/consultarClientes');
		}

		public function consultarC(){
    	$clientes=DB::table('clientes')
            ->select('clientes.*')
            ->get();

        $promo=Promocion::all();
        // View('consultarClientes', compact('promo'));
   
        return view('consultarClientes', compact('clientes', 'promo'));

    }
    public function eliminarC($id){
    	$cliente=Cliente::find($id);
    	$cliente->delete();

    	return redirect('/consultarClientes');
    }

    public function editarC($id){
        $cliente=DB::table('clientes')
            ->where('clientes.id', '=',$id)
            ->select('clientes.*')
            ->first();
        return view('editarCliente', compact('cliente'));
    }

    public function actualizarC($id, request $datos){
        $cliente=Cliente::find($id);
        /*base de datos*/ /*formulario*/
        $cliente->nombre=$datos->input('nombre');
        $cliente->correo=$datos->input('correo');
        $cliente->fecha_nacimiento=$datos->input('fecha_nacimiento');
        $cliente->sexo=$datos->input('sexo');
        $cliente->ocupacion=$datos->input('ocupacion');
        $cliente->save();

        return redirect('/consultarClientes');
    }

    public function filtrarOcupacion(Request $nombre){
        $lista = new Cliente();
        $ocupacion = $nombre->input("ocupacion");
        $sexo = $nombre->input("sexo");
        $promo=Promocion::all();
        $clientes=DB::table('clientes')
        ->where('ocupacion', 'like', $ocupacion)
        ->where('sexo', 'like', $sexo)
        ->get();
   
        return view('consultarClientes', compact('clientes', 'promo'));
    }

    public function registrarP(){
        $promociones=Promocion::all();
        return view('altaPromo', compact('promociones'));
    }


     public function guardarP(Request $datos){
        $promocion = new Promocion();
        $promocion->nombre=$datos->input('nombre');
        $promocion->descripcion=$datos->input('descripcion');
        $promocion->fecha_inicio=$datos->input('fecha_inicio');
        $promocion->fecha_termino=$datos->input('fecha_termino');
        $promocion->save();
        return redirect('/consultarPromociones');

    }

    public function consultarP(){
        $promociones=DB::table('promociones')
            ->select('promociones.*')
            ->get();
        return view('consultarPromociones', compact('promociones'));
    }

    public function eliminarP($id){
        $promocion=Promocion::find($id);
        $promocion->delete();

        return redirect('/consultarPromociones');
    }

      public function editarP($id){
        $promocion=DB::table('promociones')
            ->where('promociones.id', '=',$id)
            ->select('promociones.*')
            ->first();
        return view('editarPromo', compact('promocion'));
    }

    public function actualizarP($id, request $datos){
        $promocion=Promocion::find($id);
        /*base de datos*/ /*formulario*/
        $promocion->nombre=$datos->input('nombre');
        $promocion->descripcion=$datos->input('descripcion');
        $promocion->fecha_inicio=$datos->input('fecha_inicio');
        $promocion->fecha_termino=$datos->input('fecha_termino');
        $promocion->save();

        return redirect('/consultarPromociones');
    }

    public function enviarPromocion(Request $datos){
        // dd($datos->input('promocion'));
        $lista = new Cliente();
        $correo= $datos->input('correo');
        // $nombre=$datos->input('nombre');
        // dd($nombre);
  
         //dd($datos->input('id'));
        $promo= $datos->input('promocion');

        // ->select('correo','nombre')
        // ->where('id','like',$id)
        // ->get();

        // dd($cliente);
        $promocion=DB::table('promociones')
        ->select('nombre', 'descripcion','fecha_termino')
        ->where('id','=',$promo)
        ->get();

        // foreach ($cliente as $c) {
        //     foreach ($promocion as $p) {
        //         Mail::send('enviarPromo', ['cliente' => $c , 'promocion' => $p], function($message) use ($c , $p){
        //         $message->from('agencontacto@gmail.com', 'Mazda México');
        //         $message->to($c->correo, $c->nombre)->subject('Tenemos novedades para ti ' . $c->nombre);
        // });
        //     }
        // }
    

        for ($i=0; $i < count($correo); $i++) { 
                foreach ($promocion as $p) {
                 Mail::send('enviarPromo', ['id' => $correo[$i] , 'promocion' => $p], function($message) use ($correo, $i , $p){
                $message->from('agencontacto@gmail.com', 'Mazda México');
                $message->to($correo[$i])->subject('Tenemos novedades para ti ');
        });
                }
            
           
        }

        return redirect('/master');

    }

}


