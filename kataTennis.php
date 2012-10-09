<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class KataTennis {
    private $ar_puntos = array('1'=>0,'2'=>0);
    private $puntuacion = array('0','15','30','40');
    private $ventaja = '0';
    private $ganador = 'no';
    
    private function DameContrincante($jugador) {
        if ($jugador=='1') return '2';
        else return '1';
    }
    
    public function DamePuntosJugador($jugador) {
        return $this->puntuacion[$this->ar_puntos[$jugador]];
    }

    public function PuntuaJugador($jugador) {
        // si tiene menos de 40, sumamos
        if ($this->ar_puntos[$jugador]<3) {
            $this->ar_puntos[$jugador]++;
        } else {
            // si tiene 40, y el contrincante tiene menos de 40, ha ganado
            if ($this->ar_puntos[$this->DameContrincante($jugador)]<3) {
                $this->ganador = $jugador;
            // si tiene 40, y el contrincante también:
            } else {
                // si tiene 40 y ventaja, ha ganado
                if ($this->ventaja == $jugador) {
                    $this->ganador = $jugador;
                // si tiene 40 y nadie tiene ventaja, le ponemos ventaja
                } else if ($this->ventaja == '0') {
                    $this->ventaja = $jugador;
                // si tiene 40 y la ventaja es de otro, ponemos la ventaja a 0
                } else {
                    $this->ventaja == '0';
                }
            }
        }
    }

    public function DameGanador() {
        return $this->ganador;
    }

    public function DameVentaja() {
        return $this->ventaja;
    }

    
}

?>
