<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweets;
use App\TweetsN;
use App\FacebookN;

class problemas
{
    public $nombre;
    public $total;
    public $color;
    public $porcentaje;
}

class pilaresController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
        //
    }

    

    public function medioAmbiente()
    {

        // Sentencia para llenar la base de datos
        /*
        $table = new Tweets;
        $val = 1;
        $tweets = $table->all();
        //return $total = $tweets->count();
        foreach ($tweets as $tweet) {
            $tw = json_decode($tweet->tweet, true);
            TweetsN::create([
                'localidad' => $tw['localidad'],
                'tema' => $tw['tema'],
                'usuario' => $tw['usuario'],
                'tokens' => $tw['tokens'],
            ]);
            $val = $val+1;
        }
        return $val;
        */

        $loca = array();
        $pro = array();
        $tweet = TweetsN::all();
        $tweets = TweetsN::all()->where('tema','ambiente');
        $face = FacebookN::all()->where('tema','ambiente');
      
        //grafica y barras
        $loca[1] = $tweets->where('localidad','Usaquen')->count();
        $loca[2] = $tweets->where('localidad','Chapinero')->count();
        $loca[3] = $tweets->where('localidad','Santafe')->count();
        $loca[4] = $tweets->where('localidad','Cristobal')->count();
        $loca[5] = $tweets->where('localidad','Usme')->count();
        $loca[6] = $tweets->where('localidad','Tunjuelito')->count();
        $loca[7] = $tweets->where('localidad','Bosa')->count();
        $loca[8] = $tweets->where('localidad','Kennedy')->count();
        $loca[9] = $tweets->where('localidad','Fontibon')->count();
        $loca[10] = $tweets->where('localidad','Engativa')->count();
        $loca[11] = $tweets->where('localidad','Suba')->count();
        $loca[12] = $tweets->where('localidad','Barrios')->count();
        $loca[13] = $tweets->where('localidad','Teusaquillo')->count();
        $loca[14] = $tweets->where('localidad','Martires')->count();
        $loca[15] = $tweets->where('localidad','Antonio')->count();
        $loca[16] = $tweets->where('localidad','Puente')->count();
        $loca[17] = $tweets->where('localidad','Candelaria')->count();
        $loca[18] = $tweets->where('localidad','Rafael')->count();
        $loca[19] = $tweets->where('localidad','Ciudad')->count();
        $loca[20] = $tweets->where('localidad','Sumapaz')->count();
        //porcentajes
        $loca[21] = $tweet->where('tema','ambiente')->count();
        $loca[22] = $tweet->where('tema','movilidad')->count();
        $loca[23] = $tweet->where('tema','cultura')->count();

        $total = $loca[21] + $loca[22] + $loca[23];
        
        $loca[24] = ($loca[21] * 100) / $total;
        $loca[24] = round($loca[24] * 10) / 10;

        $loca[25] = ($loca[22] * 100) / $total;
        $loca[25] = round($loca[25] * 10) / 10;

        $loca[26] = ($loca[23] * 100) / $total;
        $loca[26] = round($loca[26] * 10) / 10;
        //fin de porcentajes

        //problematicas Tweeter Y Face
        
        $colores = array();
        $colores[0] = 'success';
        $colores[1] = 'danger';
        $colores[2] = 'info';
        $colores[3] = 'warning';
        $colores[4] = 'primary';

        $pro = array(
            'cerros' => 0,
            'reserva' => 0,
            'contaminación' => 0,
            'árbol' => 0,
            'humedal' => 0,
            'respirar' => 0,
            'toro' => 0,
            'parque' => 0,
            'aire' => 0,
            'agua' => 0,
            'mascotas' => 0,
            'basura' => 0);
        
        $proF = array(
            'cerros' => 0,
            'reserva' => 0,
            'contaminación' => 0,
            'árbol' => 0,
            'humedal' => 0,
            'respirar' => 0,
            'toro' => 0,
            'parque' => 0,
            'aire' => 0,
            'agua' => 0,
            'mascotas' => 0,
            'basura' => 0);
        
        
            //clico que cuenta las palabras y las guarda en $pro
        foreach($tweets as $tw){
            foreach($pro as $key => $value){
                $palabra = strpos($tw->tokens, $key);
                if($palabra != false){
                    $pro[$key] = $pro[$key] + 1;
                } 
            }
        }

        //clico que cuenta las palabras y las guarda en $proF FACEBOOK
        foreach($face as $fa){
            foreach($proF as $key => $value){
                $palabra = strpos($fa->tokens, $key);
                if($palabra != false){
                    $proF[$key] = $proF[$key] + 1;
                } 
            }
        }
        

        $tot = array();
        $tot[0] = 100000;
        $tot[1] = 0;
        $tot[2] = 0;
        $tot[3] = 0;
        $tot[4] = 0;
        $tot[5] = 0;

        $totFace = array();
        $totFace[0] = 100000;
        $totFace[1] = 0;
        $totFace[2] = 0;
        $totFace[3] = 0;
        $totFace[4] = 0;
        $totFace[5] = 0;

       //ciclo para organizar de mayor a menor y guarda en $tot
        for($i=1;$i < sizeof($tot); $i ++){
            foreach($pro as $p){
                if($p > $tot[$i] &&  $p < $tot[$i-1] ){
                    $tot[$i] = $p;
                    
                }
            }
            
        }
        //ciclo para organizar de mayor a menor y guarda en $totFace Facebook
        for($i=1;$i < sizeof($totFace); $i ++){
            foreach($proF as $p){
                if($p > $totFace[$i] &&  $p < $totFace[$i-1] ){
                    $totFace[$i] = $p;
                    
                }
            }
            
        }
        
        //ciclo que saca el total de la variable $tot
        $totales = 0;
        for($i=1;$i < sizeof($tot); $i ++){
            $totales = $totales + $tot[$i];
        }

        //ciclo que saca el total de la variable $totFace Facebook
        $totalesFace = 0;
        for($i=1;$i < sizeof($totFace); $i ++){
            $totalesFace = $totalesFace + $totFace[$i];
        }
        
        //ciclo final que organiza todo en objetos
        $fin = array();
        for($i=0;$i < sizeof($tot)-1; $i ++){
            
            foreach ($pro as $key => $value){
                if ($value === $tot[$i+1]) {
                    $fin[$i] = new problemas();
                    $fin[$i]->nombre = $key; 
                    $fin[$i]->total = $tot[$i+1]; 
                    $fin[$i]->color = $colores[$i];
                    $fin[$i]->porcentaje = ($fin[$i]->total * 100) / $totales;
                    $fin[$i]->porcentaje = round($fin[$i]->porcentaje * 10) / 10;
                }
                
            }
        }
        //ciclo final que organiza todo en objetos FACEBOOK
        $finF = array();
        for($i=0;$i < sizeof($totFace)-1; $i ++){
            
            foreach ($proF as $key => $value){
                if ($value === $totFace[$i+1]) {
                    $finF[$i] = new problemas();
                    $finF[$i]->nombre = $key; 
                    $finF[$i]->total = $totFace[$i+1]; 
                    $finF[$i]->color = $colores[$i];
                    $finF[$i]->porcentaje = ($finF[$i]->total * 100) / $totalesFace;
                    $finF[$i]->porcentaje = round($finF[$i]->porcentaje * 10) / 10;
                }
                
            }
        }
        
        //fin de problemáticas
        return view ('medio' , compact('loca','tweets','fin','finF','face'));
    
    }
    public function movilidad()
    {
        $loca = array();
        $tweet = TweetsN::all();
        $tweets = TweetsN::all()->where('tema','movilidad');
        $face = FacebookN::all()->where('tema','movilidad');
        //grafica y barras
        $loca[1] = $tweets->where('localidad','Usaquen')->count();
        $loca[2] = $tweets->where('localidad','Chapinero')->count();
        $loca[3] = $tweets->where('localidad','Santafe')->count();
        $loca[4] = $tweets->where('localidad','Cristobal')->count();
        $loca[5] = $tweets->where('localidad','Usme')->count();
        $loca[6] = $tweets->where('localidad','Tunjuelito')->count();
        $loca[7] = $tweets->where('localidad','Bosa')->count();
        $loca[8] = $tweets->where('localidad','Kennedy')->count();
        $loca[9] = $tweets->where('localidad','Fontibon')->count();
        $loca[10] = $tweets->where('localidad','Engativa')->count();
        $loca[11] = $tweets->where('localidad','Suba')->count();
        $loca[12] = $tweets->where('localidad','Barrios')->count();
        $loca[13] = $tweets->where('localidad','Teusaquillo')->count();
        $loca[14] = $tweets->where('localidad','Martires')->count();
        $loca[15] = $tweets->where('localidad','Antonio')->count();
        $loca[16] = $tweets->where('localidad','Puente')->count();
        $loca[17] = $tweets->where('localidad','Candelaria')->count();
        $loca[18] = $tweets->where('localidad','Rafael')->count();
        $loca[19] = $tweets->where('localidad','Ciudad')->count();
        $loca[20] = $tweets->where('localidad','Sumapaz')->count();
        //porcentajes
        $loca[21] = $tweet->where('tema','ambiente')->count();
        $loca[22] = $tweet->where('tema','movilidad')->count();
        $loca[23] = $tweet->where('tema','cultura')->count();

        $total = $loca[21] + $loca[22] + $loca[23];
        
        $loca[24] = ($loca[21] * 100) / $total;
        $loca[24] = round($loca[24] * 10) / 10;

        $loca[25] = ($loca[22] * 100) / $total;
        $loca[25] = round($loca[25] * 10) / 10;

        $loca[26] = ($loca[23] * 100) / $total;
        $loca[26] = round($loca[26] * 10) / 10;

        //problematicas
        
        $colores = array();
        $colores[0] = 'success';
        $colores[1] = 'danger';
        $colores[2] = 'info';
        $colores[3] = 'warning';
        $colores[4] = 'primary';

        $pro = array(
            'bicicleta' => 0,
            'cicloruta' => 0,
            'bicicorredores' => 0,
            'seguridad' => 0,
            'caminar' => 0,
            'trafico' => 0,
            'transmilenio' => 0,
            'metro' => 0,
            'peaton' => 0,
            'movilidad' => 0,
            'trancon' => 0,
            'señalizacion' => 0,
            'pasaje' => 0,
            'hueco' => 0);
        
        $proF = array(
            'bicicleta' => 0,
            'cicloruta' => 0,
            'bicicorredores' => 0,
            'seguridad' => 0,
            'caminar' => 0,
            'trafico' => 0,
            'transmilenio' => 0,
            'metro' => 0,
            'peaton' => 0,
            //quitar
            'sociedad' => 0, 
            'movilidad' => 0,
            'trancon' => 0,
            'señalizacion' => 0,
            'pasaje' => 0,
            'hueco' => 0);
            
            
                //clico que cuenta las palabras y las guarda en $pro
            foreach($tweets as $tw){
                foreach($pro as $key => $value){
                    $palabra = strpos($tw->tokens, $key);
                    if($palabra != false){
                        $pro[$key] = $pro[$key] + 1;
                    } 
                }
            }
    
            //clico que cuenta las palabras y las guarda en $proF FACEBOOK
            foreach($face as $fa){
                foreach($proF as $key => $value){
                    $palabra = strpos($fa->tokens, $key);
                    if($palabra != false){
                        $proF[$key] = $proF[$key] + 1;
                    } 
                }
            }
            
    
            $tot = array();
            $tot[0] = 100000;
            $tot[1] = 0;
            $tot[2] = 0;
            $tot[3] = 0;
            $tot[4] = 0;
            $tot[5] = 0;
    
            $totFace = array();
            $totFace[0] = 100000;
            $totFace[1] = 0;
            $totFace[2] = 0;
            $totFace[3] = 0;
            $totFace[4] = 0;
            $totFace[5] = 0;
    
           //ciclo para organizar de mayor a menor y guarda en $tot
            for($i=1;$i < sizeof($tot); $i ++){
                foreach($pro as $p){
                    if($p > $tot[$i] &&  $p < $tot[$i-1] ){
                        $tot[$i] = $p;
                        
                    }
                }
                
            }
            //ciclo para organizar de mayor a menor y guarda en $totFace Facebook
            for($i=1;$i < sizeof($totFace); $i ++){
                foreach($proF as $p){
                    if($p > $totFace[$i] &&  $p < $totFace[$i-1] ){
                        $totFace[$i] = $p;
                        
                    }
                }
                
            }
            
            //ciclo que saca el total de la variable $tot
            $totales = 0;
            for($i=1;$i < sizeof($tot); $i ++){
                $totales = $totales + $tot[$i];
            }
    
            //ciclo que saca el total de la variable $totFace Facebook
            $totalesFace = 0;
            for($i=1;$i < sizeof($totFace); $i ++){
                $totalesFace = $totalesFace + $totFace[$i];
            }
            
            //ciclo final que organiza todo en objetos
            $fin = array();
            for($i=0;$i < sizeof($tot)-1; $i ++){
                
                foreach ($pro as $key => $value){
                    if ($value === $tot[$i+1]) {
                        $fin[$i] = new problemas();
                        $fin[$i]->nombre = $key; 
                        $fin[$i]->total = $tot[$i+1]; 
                        $fin[$i]->color = $colores[$i];
                        $fin[$i]->porcentaje = ($fin[$i]->total * 100) / $totales;
                        $fin[$i]->porcentaje = round($fin[$i]->porcentaje * 10) / 10;
                    }
                    
                }
            }
            //ciclo final que organiza todo en objetos FACEBOOK
            $finF = array();
            for($i=0;$i < sizeof($totFace)-1; $i ++){
                
                foreach ($proF as $key => $value){
                    if ($value === $totFace[$i+1]) {
                        $finF[$i] = new problemas();
                        $finF[$i]->nombre = $key; 
                        $finF[$i]->total = $totFace[$i+1]; 
                        $finF[$i]->color = $colores[$i];
                        $finF[$i]->porcentaje = ($finF[$i]->total * 100) / $totalesFace;
                        $finF[$i]->porcentaje = round($finF[$i]->porcentaje * 10) / 10;
                    }
                    
                }
            }
            
            //fin de problemáticas
            return view ('medio' , compact('loca','tweets','fin','finF','face'));
    }

    public function deporte()
    {
        $loca = array();
        $tweet = TweetsN::all();
        $tweets = TweetsN::all()->where('tema','cultura');
        //grafica y barras
        $loca[1] = $tweets->where('localidad','Usaquen')->count();
        $loca[2] = $tweets->where('localidad','Chapinero')->count();
        $loca[3] = $tweets->where('localidad','Santafe')->count();
        $loca[4] = $tweets->where('localidad','Cristobal')->count();
        $loca[5] = $tweets->where('localidad','Usme')->count();
        $loca[6] = $tweets->where('localidad','Tunjuelito')->count();
        $loca[7] = $tweets->where('localidad','Bosa')->count();
        $loca[8] = $tweets->where('localidad','Kennedy')->count();
        $loca[9] = $tweets->where('localidad','Fontibon')->count();
        $loca[10] = $tweets->where('localidad','Engativa')->count();
        $loca[11] = $tweets->where('localidad','Suba')->count();
        $loca[12] = $tweets->where('localidad','Barrios')->count();
        $loca[13] = $tweets->where('localidad','Teusaquillo')->count();
        $loca[14] = $tweets->where('localidad','Martires')->count();
        $loca[15] = $tweets->where('localidad','Antonio')->count();
        $loca[16] = $tweets->where('localidad','Puente')->count();
        $loca[17] = $tweets->where('localidad','Candelaria')->count();
        $loca[18] = $tweets->where('localidad','Rafael')->count();
        $loca[19] = $tweets->where('localidad','Ciudad')->count();
        $loca[20] = $tweets->where('localidad','Sumapaz')->count();
        //porcentajes
        $loca[21] = $tweet->where('tema','ambiente')->count();
        $loca[22] = $tweet->where('tema','movilidad')->count();
        $loca[23] = $tweet->where('tema','cultura')->count();

        $total = $loca[21] + $loca[22] + $loca[23];
        
        $loca[24] = ($loca[21] * 100) / $total;
        $loca[24] = round($loca[24] * 10) / 10;

        $loca[25] = ($loca[22] * 100) / $total;
        $loca[25] = round($loca[25] * 10) / 10;

        $loca[26] = ($loca[23] * 100) / $total;
        $loca[26] = round($loca[26] * 10) / 10;

        //problematicas
        
        $colores = array();
        $colores[0] = 'success';
        $colores[1] = 'danger';
        $colores[2] = 'info';
        $colores[3] = 'warning';
        $colores[4] = 'primary';

        $pro = array(
            'deporte' => 0,
            'ciclovia' => 0,
            'deportes' => 0,
            'extremos' => 0,
            'salud' => 0,
            'fitness' => 0,
            'cultura' => 0,
            'recreación' => 0,
            'escuelas' => 0,
            'deportivas' => 0);
        
        
            //clico que cuenta las palabras y las guarda en $pro
        foreach($tweets as $tw){
            foreach($pro as $key => $value){
                $palabra = strpos($tw->tokens, $key);
                if($palabra != false){
                    $pro[$key] = $pro[$key] + 1;
                } 
            }
        }
        
        $tot = array();
        $tot[0] = 100000;
        $tot[1] = 0;
        $tot[2] = 0;
        $tot[3] = 0;
        $tot[4] = 0;
        $tot[5] = 0;

       //ciclo para organizar de mayor a menor y guarda en $tot
        for($i=1;$i < sizeof($tot); $i ++){
            foreach($pro as $p){
                if($p > $tot[$i] &&  $p < $tot[$i-1] ){
                    $tot[$i] = $p;
                    
                }
            }
            
        }
        //ciclo que saca el total de la variable $tot
        $totales = 0;
        for($i=1;$i < sizeof($tot); $i ++){
            $totales = $totales + $tot[$i];
        }

        //ciclo final que organiza todo en objetos
        $fin = array();
        for($i=0;$i < sizeof($tot)-1; $i ++){
            
            foreach ($pro as $key => $value){
                if ($value === $tot[$i+1]) {
                    $fin[$i] = new problemas();
                    $fin[$i]->nombre = $key; 
                    $fin[$i]->total = $tot[$i+1]; 
                    $fin[$i]->color = $colores[$i];
                    $fin[$i]->porcentaje = ($fin[$i]->total * 100) / $totales;
                    $fin[$i]->porcentaje = round($fin[$i]->porcentaje * 10) / 10;
                }
                
            }
        }
        
        //fin de problemáticas

        return view ('deporte', compact('loca','tweets','fin'));
    }
    public function datatable()
    {
        return datatables(TweetsN::all())->toJson();

    }
    
}
