<?php

require_once 'Problem.php';

/**
 * Euler Problem
 **/
class Euler_Prob41_Test extends PHPUnit_Framework_TestCase
{

	public function testGetSortedArray()
	{
		$unSortedArray = array(4, 2, 1, 3);
		sort(&$unSortedArray, SORT_NUMERIC);
		$this->assertEquals(array(1, 2, 3, 4), $unSortedArray);
	}

	public function testFindingPermutations()
	{
		$c = new Euler_Prob41_Problem();
		$this->assertEquals(6, count($c->findPermutations(range(1, 3))));
	}
		
	
	public function testThePrimes()
	{
		$c = new Euler_Prob41_Problem();
		$this->assertTrue($c->isPrime(3));
		$this->assertTrue($c->isPrime(11));
		$this->assertTrue($c->isPrime(13));
		
		$this->assertFalse($c->isPrime(12));
		$this->assertFalse($c->isPrime(48));
		$this->assertFalse($c->isPrime(100));
		
	}
	
	public function testProblemSolution() {
		$c = new Euler_Prob41_Problem();
		$c->solution();
	}
	
	
	public function testArrayMapping() 
	{
		$conv = function($v, $w) {
			return $v . $w;
		};
		
		$this->assertEquals(array_reduce(array(1, 2, 3), $conv) , '123');
	}	
	
}

