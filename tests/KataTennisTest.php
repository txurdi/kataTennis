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
    
    public function testJuegoSoloTerminaSiHayGanador() {
        
        $hayganador = (($this->object->DameGanador()=='1') || ($this->object->DameGanador()=='2'));                
                
        $this->assertEquals($hayganador,$this->object->JuegoTerminado());
    }

    public function testJugador1GanaSiPuntuaCon40yJugador2Menosde40() {
        
        $this->object->TomaPuntosJugador1('40');
        $this->object->TomaPuntosJugador2('30');
        $this->object->PuntuaJugador1();
        
        $this->assertEquals($this->object->DameGanador(),'1');
    }

    public function testJugador2GanaSiPuntuaCon40yJugador1Menosde40() {
        
        $this->object->TomaPuntosJugador1('30');
        $this->object->TomaPuntosJugador2('40');
        $this->object->PuntuaJugador2();
        
        $this->assertEquals($this->object->DameGanador(),'2');
    }

}
