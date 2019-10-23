<?php

namespace App\Http\Controllers;

use App\Variante;
use App\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class interfazController extends Controller
{

    public function get_landing_page()
    {
        return view('pages.landing');
    }

    public function get_login_page()
    {
        return view('auth.login');
    }

    public function get_register_page()
    {
        return view('auth.register');
    }

    public function get_user_profile()
    {
        $detalle_user = DB::table('detalle_user')->where('detalle_user.user_id', '=', Auth::user()->id)->first();
        return view('pages.profile.user', compact('detalle_user'));
    }

    public function get_plan_user($especie, Mascota $mascota, $user){

        $estado = "contratar";
        
        if($especie == "1"){
            $variantes = DB::table('variante_perro')->get();
            return view('pages.mascota.plan', compact('variantes', 'mascota', 'estado')); 

        }elseif($especie == "2"){
            
            $variantes = DB::table('variante_gato')->get();
            return view('pages.mascota.plan2', compact('variantes', 'mascota', 'estado'));   
            
        }
    }

    public function get_planCotizar(){
        
        return view('pages.step');
    }
    public function planCotizar(){

        $especie = request()->get('radioEspecies');
        $nombre = request()->get('nombre');
        $estado = "cotizar";


        if($especie == 1){
            $variantes = DB::table('variante_perro')->get();
            return view('pages.mascota.plan', compact('variantes', 'nombre', 'estado'));  

        }elseif($especie == 2){

            $variantes = DB::table('variante_gato')->get();
            return view('pages.mascota.plan2', compact('variantes', 'nombre', 'estado'));   
            
        }

        echo ($especie." - ".$nombre." - ".$estado);             
    }

    public function agregarVariante(Request $request)
    {
        // $variante = Variante::findOrFail(2);
        $variante = new Variante();
        $variante->nombre = 'Algo';
        $variante->valor = 23990;
        $variante->frecuencia = 'Una vez al mes';
        $variante->servicio_id = 1;

        try {
            $variante->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('No se pudo insertar la variante');
        }

        return redirect()->route('variante.resultado');
    }
}
