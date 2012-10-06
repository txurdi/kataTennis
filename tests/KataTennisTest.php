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
    
    public function testJugadoresEmpiezanACero()
    {
	$puntos1 = $this->object->DamePuntosJugador('1');
	$puntos2 = $this->object->DamePuntosJugador('2');
        
        $this->assertEquals($puntos1, 0);
        $this->assertEquals($puntos2, 0);
    }
    
    public function testJugadorSumaPuntosPrimeraVezQuedaenQuince() {

        $this->object->SumarPuntosJugador('1');
        $this->assertEquals($this->object->DamePuntosJugador('1'),15);
        $this->object->SumarPuntosJugador('2');
        $this->assertEquals($this->object->DamePuntosJugador('2'),15);
    }
 
    public function testJugadorAlSumarSigueProgresion() {
        $this->object->SumarPuntosJugador('1');
        $this->assertEquals($this->object->DamePuntosJugador('1'),15);
        $this->object->SumarPuntosJugador('1');
        $this->assertEquals($this->object->DamePuntosJugador('1'),30);
        $this->object->SumarPuntosJugador('1');
        $this->assertEquals($this->object->DamePuntosJugador('1'),40);
        $this->object->SumarPuntosJugador('2');
        $this->assertEquals($this->object->DamePuntosJugador('2'),15);
        $this->object->SumarPuntosJugador('2');
        $this->assertEquals($this->object->DamePuntosJugador('2'),30);
        $this->object->SumarPuntosJugador('2');
        $this->assertEquals($this->object->DamePuntosJugador('2'),40);
    }
    
    public function testJugador1GanaCon40PuntosSiElOtroNoTiene40(){
        $this->object->SumarPuntosJugador('1');//15
        $this->object->SumarPuntosJugador('1');//30
        $this->object->SumarPuntosJugador('1');//40
        $this->object->SumarPuntosJugador('1');//gana
        $this->assertEquals($this->object->DameGanador(),'1');
    }
    
    public function testJugador2GanaCon40PuntosSiElOtroNoTiene40(){
        $this->object->SumarPuntosJugador('2');
        $this->object->SumarPuntosJugador('2');
        $this->object->SumarPuntosJugador('2');
        $this->object->SumarPuntosJugador('2');
        $this->assertEquals($this->object->DameGanador(),'2');
    }
    
    public function testSilos2JugadoresEstanA40AlSumarNoHayGanador() {
        $this->object->SumarPuntosJugador('1');
        $this->object->SumarPuntosJugador('1');
        $this->object->SumarPuntosJugador('1');
        $this->object->SumarPuntosJugador('2');
        $this->object->SumarPuntosJugador('2');
        $this->object->SumarPuntosJugador('2');
        $this->object->SumarPuntosJugador('1');
        $this->assertEquals($this->object->DameGanador(),'');
        
    }
    
}