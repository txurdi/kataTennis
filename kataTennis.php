<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class KataTennis {
    private $puntosJugador=array();
    private $puntos = array(0,15,30,40);
    
    function __construct() {
        $this->puntosJugador['1'] = 0;
        $this->puntosJugador['2'] = 0;
    }
    
    function DamePuntosJugador($jugadorNumero) {
        return $this->puntos[$this->puntosJugador[$jugadorNumero]];
    }
    
    function SumarPuntosJugador($jugadorNumero) {
        $this->puntosJugador[$jugadorNumero] ++;
    }
    
    function DameGanador(){
        var_dump($this->puntosJugador['1'],$this->puntosJugador['2']);
        if (($this->puntosJugador['1']==4) && ($this->puntosJugador['2']<3)) return '1';
        if (($this->puntosJugador['2']==4) && ($this->puntosJugador['1']<3)) return '2';
        
        
    }
    
}

?>
