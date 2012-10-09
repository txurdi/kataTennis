<?php
/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-10-06 at 10:21:52.
 */
class KataTennisTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var KataTennis
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        include_once '../kataTennis.php';
        $this->object = new KataTennis;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }
    
    public function testJugadoresComienzanCon0Puntos() {
        
        $puntos1 = $this->object->DamePuntosJugador('1');
        $puntos2 = $this->object->DamePuntosJugador('2');
                
        $this->assertEquals($puntos1,0);
        $this->assertEquals($puntos2,0);
    }
    
    public function testSiJugadorTiene0yPuntuaTiene15() {

        $this->object->PuntuaJugador('1');
        $this->object->PuntuaJugador('2');

        $puntos1 = $this->object->DamePuntosJugador('1');
        $puntos2 = $this->object->DamePuntosJugador('2');

        $this->assertEquals($puntos1,15);
        $this->assertEquals($puntos2,15);

        
    }

    public function testSiJugadorPuntuaSigueSecuencia_0_15_30_40() {

        $this->object->PuntuaJugador('1');
        $this->assertEquals($this->object->DamePuntosJugador('1'),15);
        $this->object->PuntuaJugador('1');
        $this->assertEquals($this->object->DamePuntosJugador('1'),30);
        $this->object->PuntuaJugador('1');
        $this->assertEquals($this->object->DamePuntosJugador('1'),40);

        $this->object->PuntuaJugador('2');
        $this->assertEquals($this->object->DamePuntosJugador('2'),15);
        $this->object->PuntuaJugador('2');
        $this->assertEquals($this->object->DamePuntosJugador('2'),30);
        $this->object->PuntuaJugador('2');
        $this->assertEquals($this->object->DamePuntosJugador('2'),40);
        
    }

    public function testJugador1GanaCon40PuntosSiElOtroNoTiene40() {

        $this->object->PuntuaJugador('1');//15
        $this->object->PuntuaJugador('1');//30
        $this->object->PuntuaJugador('1');//40
        $this->object->PuntuaJugador('1');//gana
        $this->assertEquals($this->object->DameGanador(),'1');
        
    }

    public function testJugador2GanaCon40PuntosSiElOtroNoTiene40() {

        $this->object->PuntuaJugador('2');//15
        $this->object->PuntuaJugador('2');//30
        $this->object->PuntuaJugador('2');//40
        $this->object->PuntuaJugador('2');//gana
        $this->assertEquals($this->object->DameGanador(),'2');
        
    }

    public function testSilos2JugadoresEstanA40SiSumaJugador1NoHayGanadorSinoVentajaJugador1() {

        $this->object->PuntuaJugador('1');//15
        $this->object->PuntuaJugador('1');//30
        $this->object->PuntuaJugador('1');//40
        $this->object->PuntuaJugador('2');//15
        $this->object->PuntuaJugador('2');//30
        $this->object->PuntuaJugador('2');//40
        $this->object->PuntuaJugador('1');//40+
        $this->assertEquals($this->object->DameGanador(),'no');
        $this->assertEquals($this->object->DameVentaja(),'1');
        
    }

    public function testSilos2JugadoresEstanA40SiSumaJugador2NoHayGanadorSinoVentajaJugador2() {

        $this->object->PuntuaJugador('1');//15
        $this->object->PuntuaJugador('1');//30
        $this->object->PuntuaJugador('1');//40
        $this->object->PuntuaJugador('2');//15
        $this->object->PuntuaJugador('2');//30
        $this->object->PuntuaJugador('2');//40
        $this->object->PuntuaJugador('2');//40+
        $this->assertEquals($this->object->DameGanador(),'no');
        $this->assertEquals($this->object->DameVentaja(),'2');
        
    }

    public function testSiJugador1TieneVentajaYPuntuaGana() {

        $this->object->PuntuaJugador('1');//15
        $this->object->PuntuaJugador('1');//30
        $this->object->PuntuaJugador('1');//40
        $this->object->PuntuaJugador('2');//15
        $this->object->PuntuaJugador('2');//30
        $this->object->PuntuaJugador('2');//40
        $this->object->PuntuaJugador('1');//40+
        $this->object->PuntuaJugador('1');//gana
        $this->assertEquals($this->object->DameGanador(),'1');
        
    }

    public function testSiJugador2TieneVentajaYPuntuaGana() {

        $this->object->PuntuaJugador('1');//15
        $this->object->PuntuaJugador('1');//30
        $this->object->PuntuaJugador('1');//40
        $this->object->PuntuaJugador('2');//15
        $this->object->PuntuaJugador('2');//30
        $this->object->PuntuaJugador('2');//40
        $this->object->PuntuaJugador('2');//40+
        $this->object->PuntuaJugador('2');//gana
        $this->assertEquals($this->object->DameGanador(),'2');
        
    }


    public function testSiJugador2TieneVentajaYJugador1PuntuaQuedanIguales() {

        $this->object->PuntuaJugador('1');//15
        $this->object->PuntuaJugador('1');//30
        $this->object->PuntuaJugador('1');//40
        $this->object->PuntuaJugador('2');//15
        $this->object->PuntuaJugador('2');//30
        $this->object->PuntuaJugador('2');//40
        $this->object->PuntuaJugador('2');//40+
        $this->object->PuntuaJugador('1');//iguales
        $this->assertEquals($this->object->DameGanador(),'no');
        
    }

    public function testSiJugador1TieneVentajaYJugador2PuntuaQuedanIguales() {

        $this->object->PuntuaJugador('1');//15
        $this->object->PuntuaJugador('1');//30
        $this->object->PuntuaJugador('1');//40
        $this->object->PuntuaJugador('2');//15
        $this->object->PuntuaJugador('2');//30
        $this->object->PuntuaJugador('2');//40
        $this->object->PuntuaJugador('1');//40+
        $this->object->PuntuaJugador('2');//iguales
        $this->assertEquals($this->object->DameGanador(),'no');
        
    }

}
