<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{

    public function index(Request $request){

        $dez = $request->input('10Dias');
        $vinte = $request->input('20Dias');
        $trinta = $request->input('30Dias');
        $quarenta = $request->input('40Dias');
        $cinquenta = $request->input('50Dias');
        $sessenta = $request->input('60Dias');
        $setenta = $request->input('70Dias');
        $oitenta = $request->input('80Dias');
        $noventa = $request->input('90Dias');



        return view('/formulario', compact('dez','vinte','trinta','quarenta','cinquenta','sessenta','setenta','oitenta','noventa'));
        
        
    } 
}