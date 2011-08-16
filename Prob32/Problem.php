<?php

/**
 * Euler Problem32
 **/
class Problem
{
	/**
	 * Check if the given number is pandigital or not
	 * @number string 
	 * @return boolean
	 */
	public function isPandigital($number)
	{
		$numberArray = str_split($number);
		if (!$this->isUniqueArray($numberArray)) {
			return false;
		}
		
		for ($i = 1; $i <= 9; $i++) {
			if (!in_array($i, $numberArray)) {
				return false;
			}
		}
		return true;
	}

	public function isUniqueArray($array)
	{
		return (count(array_unique($array)) == count($array));
	}
	
	public function findPandigitals()
	{
		$sum = 0;
		$max = 9999;
		for ($i = 0; $i < $max; $i++) { 
			for ($j=0; $j < $max; $j++) { 
				$result = $i * $j;
				$sum += $result;
				if ($this->isPandigital(sprintf('%d%d%d', $i, $j, $result))) {
					printf('%d x %d = %d' . "\n", $i, $j, $result);
				}
			}
		}
		printf('The products sum: %d', $sum);
	}
}

$c = new Problem();
$c->findPandigitals();
