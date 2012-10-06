<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class KataTennis {
    private $puntosJugador1;
    private $puntosJugador2;
    private $ultimapuntuacion=false;

    public function DameGanador() {
        return '1';
    }
    
    public function JuegoTerminado() {
        if (($this->DameGanador()=='1') || ($this->DameGanador()=='2')) return true;
        else return false;
    }
    
    public function TomaPuntosJugador1($puntos) {
        $this->puntosJugador1 = $puntos;
    }
    
    public function TomaPuntosJugador2($puntos) {
        $this->puntosJugador2 = $puntos;        
    }
    
    public function PuntuaJugador1() {
        $this->ultimapuntuacion = '1';
    }
    
    public function PuntuaJugador2() {
        $this->ultimapuntuacion = '2';
    }
    
    
}

?>
