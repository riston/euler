<?php

require_once 'Problem.php';

/**
 * Euler Problem32
 **/
class Test extends PHPUnit_Framework_TestCase
{
	public function testIsItPandigitalNumber()
	{
		$c = new Problem();
		$this->assertFalse($c->isPandigital('12335445'));
		$this->assertFalse($c->isPandigital('12345678910'));
		$this->assertTrue($c->isPandigital('231647895'));
		$this->assertTrue($c->isPandigital('123456789'));
	}

	public function testIfArrayIsUnique()
	{
		$c = new Problem();
		$this->assertEquals(count(array_unique(str_split('hello'))), 4);

		$this->assertFalse($c->isUniqueArray(str_split('121')));
	}
	
	public function testAnyPandigitals()
	{
		$c = new Problem();
		$c->findPandigitals();
	}
}

