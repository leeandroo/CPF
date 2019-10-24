<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mascota;
use App\User;
use App\Variante;
use App\Plan;
use App\PlanVariante;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PlanController extends Controller
{
    public function registerPlanDog(){
    
        $id_user = request()->get('usuario');
        $id_mascota = request()->get('mascota');
        $total = request()->get('total');

        

        $plan = new Plan();
        $plan->user_id = request()->get('usuario');
        $plan->mascota_id = request()->get('mascota');       
        $plan->total = request()->get('total');

        try {

            $plan->save();

            if(request()->get('elemento1_1')){

                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 1;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento1_2')){

                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 2;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar el planVariante');
                }
                
            }

            if(request()->get('elemento1_3')){

                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 3;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar el planVariante');
                }
                
            }            
           
            if(request()->get('elemento2_6') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 6;       
                $planvariante->cantidad = request()->get('elemento2_6');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento2_7') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 7;       
                $planvariante->cantidad = request()->get('elemento2_7');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento3_8')){

                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 8;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar el planVariante');
                }
                
            }

            if(request()->get('elemento4_11')){

                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 11;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar el planVariante');
                }
                
            }

            if(request()->get('elemento5_12') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 12;       
                $planvariante->cantidad = request()->get('elemento5_12');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento5_13') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 13;       
                $planvariante->cantidad = request()->get('elemento5_13');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento6_14') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 14;       
                $planvariante->cantidad = request()->get('elemento6_14');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento6_15') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 15;       
                $planvariante->cantidad = request()->get('elemento6_15');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento6_16') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 16;       
                $planvariante->cantidad = request()->get('elemento6_16');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento6_17') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 17;       
                $planvariante->cantidad = request()->get('elemento6_17');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento6_18')){

                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 18;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar el planVariante');
                }
                
            }

            if(request()->get('elemento7_19')){

                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 19;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar el planVariante');
                }
                
            }

            if(request()->get('elemento7_20'))
            {

                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 20;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar el planVariante');
                }
                
            }

            if(request()->get('elemento7_21'))
            {

                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 21;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar el planVariante');
                }
                
            }

            if(request()->get('elemento7_22'))
            {

                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 22;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar el planVariante');
                }
                
            }

            if(request()->get('elemento8_24'))
            {

                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 24;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar el planVariante');
                }
                
            }

            if(request()->get('elemento8_25'))
            {

                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 25;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar el planVariante');
                }
                
            }

            if(request()->get('elemento8_26'))
            {

                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 26;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar el planVariante');
                }
                
            }

            if(request()->get('elemento8_27'))
            {

                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 27;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar el planVariante');
                }
                
            }


            if(request()->get('elemento9_29') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 29;       
                $planvariante->cantidad = request()->get('elemento9_29');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento9_30') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 30;       
                $planvariante->cantidad = request()->get('elemento9_30');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento9_31') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 31;       
                $planvariante->cantidad = request()->get('elemento9_31');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento10_32') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 32;       
                $planvariante->cantidad = request()->get('elemento10_32');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento10_33') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 33;       
                $planvariante->cantidad = request()->get('elemento10_33');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento10_34') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 34;       
                $planvariante->cantidad = request()->get('elemento10_34');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento10_35') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 35;       
                $planvariante->cantidad = request()->get('elemento10_35');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento10_36') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 36;       
                $planvariante->cantidad = request()->get('elemento10_36');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento10_37') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 37;       
                $planvariante->cantidad = request()->get('elemento10_37');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }
            
            if(request()->get('elemento10_38') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 38;       
                $planvariante->cantidad = request()->get('elemento10_38');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

   
            Mascota::find($id_mascota)->update(['estado_plan' => 2]);


        } catch (\Exception $e) {
            return redirect()->back()->withErrors('No se pudo insertar el plan');
        }

        return redirect('/user-profile/mascota')->with('message', array('title' => '¡Contrataste el Plan con ÉXITO!', 'body'=>'Tu mascota ya cuenta con un plan de salud preventivo'));        
    }

    public function registerPlanCat(){
    
        $id_user = request()->get('usuario');
        $id_mascota = request()->get('mascota');
        $total = request()->get('total');

        

        $plan = new Plan();
        $plan->user_id = request()->get('usuario');
        $plan->mascota_id = request()->get('mascota');       
        $plan->total = request()->get('total');

        try {

            $plan->save();

            if(request()->get('elemento1_4')){

                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 4;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento1_5'))
            {
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 5;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar el planVariante');
                }
                
            }

            if(request()->get('elemento2_6') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 6;       
                $planvariante->cantidad = request()->get('elemento2_6');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento2_7') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 7;       
                $planvariante->cantidad = request()->get('elemento2_7');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento3_9'))
            {
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 9;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar el planVariante');
                }
                
            }

            if(request()->get('elemento3_10'))
            {
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 10;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar el planVariante');
                }
                
            }

            if(request()->get('elemento4_11'))
            {
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 11;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar el planVariante');
                }
                
            }


            if(request()->get('elemento5_12') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 12;       
                $planvariante->cantidad = request()->get('elemento5_12');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento5_13') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 13;       
                $planvariante->cantidad = request()->get('elemento5_13');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento6_14') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 14;       
                $planvariante->cantidad = request()->get('elemento6_14');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento6_15') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 15;       
                $planvariante->cantidad = request()->get('elemento6_15');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento6_16') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 16;       
                $planvariante->cantidad = request()->get('elemento6_16');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento6_17') > 0 ){
                
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 17;       
                $planvariante->cantidad = request()->get('elemento6_17');

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar la planVariante');
                }
                
            }

            if(request()->get('elemento6_18'))
            {
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 18;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar el planVariante');
                }
                
            }

            if(request()->get('elemento7_23'))
            {
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 23;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar el planVariante');
                }
                
            }

            if(request()->get('elemento8_28'))
            {
                $planvariante = new PlanVariante();
                $planvariante->plan_id = $plan->id;
                $planvariante->variante_id = 28;       
                $planvariante->cantidad = 1;

                try {
                    $planvariante->save();
                } catch (\Exception $e) {
                    return redirect()->back()->withErrors('No se pudo insertar el planVariante');
                }
                
            }


            Mascota::find($id_mascota)->update(['estado_plan' => 2]);


        } catch (\Exception $e) {
            return redirect()->back()->withErrors('No se pudo insertar el plan');
        }

        return redirect('/user-profile/mascota')->with('message', array('title' => '¡Contrataste el Plan con ÉXITO!', 'body'=>'Tu mascota ya cuenta con un plan de salud preventivo'));        
    }

    public function index(User $user){

        $planes = DB::table('plan as pl')
        ->join('mascota as ms','pl.mascota_id', '=','ms.id')
        ->select('pl.id','ms.nombre', 'pl.created_at', 'pl.total')
        ->where('pl.user_id', '=', $user->id)
        ->get();

        return view('pages.plan.index', compact('planes'));
    }

    public function detalle($id){
        $codigo = $id;

        $detalles = DB::table('plan_variante as plv')
        ->join('variante as v', 'plv.variante_id', '=', 'v.id')
        ->join('servicio as s', 'v.servicio_id', '=', 's.id')
        ->join('plan as pl', 'plv.plan_id', '=', 'pl.id')
        ->select('s.nombre as nom1', 'v.nombre as nom2','plv.cantidad', 'v.precio')
        ->where('pl.id', '=', $id)
        ->get();

        return view('pages.plan.detalle', compact('detalles', 'codigo'));
    }


    
}
