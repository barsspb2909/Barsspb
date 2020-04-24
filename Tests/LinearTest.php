<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include_once __DIR__ . '/../core/EquationInterface.php';
include_once __DIR__ . '/../core/LogInterface.php';
include_once __DIR__ . '/../core/LogAbstract.php';
include_once __DIR__ . '/../Artem/Linear.php';
include_once __DIR__ . '/../Artem/Square.php';
include_once __DIR__ . '/../Artem/ArtemException.php';
include_once __DIR__ . '/../Artem/MyLog.php';
class LinearTest extends TestCase {
	public function testLinear1() : void
	{
		$a = new Artem\Linear();
		$this->assertEquals([-2],$a->linearEquation(5,10));
	}
	public function testLinear2() : void
	{
        $a = new Artem\Linear();
        $this->assertEquals([0],$a->linearEquation(5,0));
	}
	public function testExpectExeption1() : void
	{
        $a = new Artem\Linear();
        $this->expectExeption(Artem\ArtemException::class);
        $a->linearEquation(0,5);
	}
	public function testExpectExeption2() : void
	{
        $a = new Artem\Linear();
        $this->expectExeption(Artem\ArtemException::class);
        $a->linearEquation(0,0);
	}
}