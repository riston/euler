<?php
require_once dirname(__FILE__) . '/../Prob41/Problem.php';

/**
 * Euler Problem37
 **/
class Euler_Prob37_Problem
{
	private $prob41;
	
	public function __construct() {
		$this->prob41 = new Euler_Prob41_Problem;
	}
	
	/**
	 * Start to remove numbers from left to right.
	 * @param int $number base number
	 * @return array the numbers generated.
	 */
	public function leftRemove($number) {
		$nums = array();
		$strNum = (string) $number;
		for ($i = 0; $i < strlen($strNum); $i++) {
			$nums[] = substr($strNum, $i);
		}
		return $nums;
	}
	
	/**
	 * Start to remove numbers from right to left.
	 * @param int $number base number
	 * @return array the numbers generated.
	 */
	public function rightRemove($number) {
		$nums = array();
		$strNum = (string) $number;
		for ($i = 1; $i < strlen($strNum); $i++) {
			$nums[] = substr($strNum, 0, $i);
		}
		return $nums;
	}
	
	public function isTruncatable($number) {
		if (!$this->prob41->isPrime($number))
			return false;

		$right	= $this->rightRemove($number);
		$left	= $this->leftRemove($number);
		$nums	= array_merge($right, $left);

		foreach ($nums as $numbers) {
			if (!$this->prob41->isPrime(intval($numbers)))
				return false;
		}
		return true;
	}
}

$c = new Euler_Prob37_Problem();
$number = 23;
$primes = array();
while (count($primes) < 11) {
	if ($c->isTruncatable($number)) {
		$primes[] = $number;
	}
	$number++;
}
print_r($primes);
echo array_sum($primes);