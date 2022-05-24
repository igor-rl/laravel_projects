<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainCotroller extends Controller
{
    // index
    public function index(){
        return view('welcome',
            [
                'nav_mobile'=>nav_bar_posicao_ativa('secondary','dark',0),
                'nav_desktop'=>nav_bar_posicao_ativa('light','secondary',0),
            ]
        );
    }

    // produtos
    public function produtos(){
        return view('produtos',
            [   
                'nav_mobile'=>nav_bar_posicao_ativa('secondary','dark',1),
                'nav_desktop'=>nav_bar_posicao_ativa('light','secondary',1),
            ]   
        );
    }

    // contato
    public function contato(){
        return view('contato',
            [
                'nav_mobile'=>nav_bar_posicao_ativa('secondary','dark',2),
                'nav_desktop'=>nav_bar_posicao_ativa('light','secondary',2),
            ]
        );
    }

    // sobrenos
    public function sobrenos(){
        return view('sobrenos',
            [
                'nav_mobile'=>nav_bar_posicao_ativa('secondary','dark',3),
                'nav_desktop'=>nav_bar_posicao_ativa('light','secondary',3),
            ]
        );
    }

    // voce
    public function voce(){
        return view('voce',
            [
                'nav_mobile'=>nav_bar_posicao_ativa('secondary','dark',4),
                'nav_desktop'=>nav_bar_posicao_ativa('light','secondary',4),
            ]
        );
    }
}


function nav_bar_posicao_ativa($generic_value,$value_if_true,$position_active){
    $array=[$generic_value,$generic_value,$generic_value,$generic_value,$generic_value];
    $array[$position_active]=$value_if_true;
    return $array;
}
