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
		if (strlen($number) != 9) {
			return false;
		}
		
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
		$results = array();
		$max = 2000;
		
		for ($i = 1; $i < $max; $i++) { 
			for ($j = 1; $j < $max; $j++) { 
				$result = $i * $j;
				
				if ($this->isPandigital(sprintf('%d%d%d', $i, $j, $result))) {
					printf('%d x %d = %d' . "\n", $i, $j, $result);
					$results[] = $result;
				}
			}
		}
		
		printf('The products sum: %d', array_sum(array_unique($results)));
	}
}

$c = new Problem();
$c->findPandigitals();
